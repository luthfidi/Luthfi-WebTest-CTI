<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Trial;

class TrialRequested extends Mailable
{
    use Queueable, SerializesModels;

    public $trial;

    public function __construct(Trial $trial)
    {
        $this->trial = $trial;
    }

    public function build()
    {
        return $this->markdown('emails.trial-requested')
                    ->subject('Welcome to Sangfor Cyber Command Trial');
    }
}