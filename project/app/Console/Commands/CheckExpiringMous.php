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
    protected $description = 'Check for MoUs nearing expiration and send renewal emails';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Define the expiration warning period (e.g., 30 days before expiration)
        $warningPeriod = Carbon::now()->addDays(30);

        // Get all MoUs expiring within the warning period
        $expiringMous = Mou::where('end_date', '<=', $warningPeriod)->get();

        foreach ($expiringMous as $mou) {
            // Send renewal email
            Mail::to($mou->recipient_email)->send(new RenewalReminder($mou));
        }

        return 0;
    }
}



