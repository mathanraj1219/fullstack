<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Mou;

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
        return $this->view('emails.renewal-reminder')
                    ->subject('Renewal Reminder for MoU: ' . $this->mou->title)
                    ->with(['mou' => $this->mou]);
    }
}