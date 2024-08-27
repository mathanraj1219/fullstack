<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\mou;

class RenewalReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $mou;

    public function __construct(Mou $mou)
    {
        $this->mou = $mou;
    }

    public function build()
    {
        $subject = $this->mou->end_date < now() 
            ? 'MoU Expired: ' . $this->mou->name 
            : 'Renewal Reminder for MoU: ' . $this->mou->name;

        return $this->view('emails.renewal-reminder')
                    ->subject($subject)
                    ->with(['mou' => $this->mou]);
    }
}