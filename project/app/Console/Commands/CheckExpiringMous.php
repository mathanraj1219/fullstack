<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\mou;
use Illuminate\Support\Facades\Mail;
use App\Mail\RenewalReminder;
use Carbon\Carbon;

class CheckExpiringMous extends Command
{
    protected $signature = 'mous:check-expiration';
    protected $description = 'Check for MoUs nearing expiration or already expired and send emails accordingly';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Define the expiration warning period (e.g., 30 days before expiration)
        $warningPeriod = Carbon::now()->addDays(30);

        // Get all MoUs expiring within the warning period or already expired
        $expiringOrExpiredMous = Mou::where(function($query) use ($warningPeriod) {
            $query->where('end_date', '<=', $warningPeriod)
                  ->orWhere('end_date', '<', Carbon::now());
        })->where('reminder_sent', false) // Only select MoUs where the reminder hasn't been sent
          ->get();

        foreach ($expiringOrExpiredMous as $mou) {
            // Send renewal or expired email
            Mail::to($mou->recipient_email)->send(new RenewalReminder($mou));

            // Mark the reminder as sent
            $mou->reminder_sent = true;
            $mou->save();
        }

        return 0;
    }
}



