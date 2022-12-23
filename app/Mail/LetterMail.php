<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LetterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details,$FreeCreditCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$FreeCreditCode)
    {
        $this->details = $details;
        $this->FreeCreditCode = $FreeCreditCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Newsletter "Ms-Lady-Gamble-s"')
        ->view('Mail.new_subscriber');
    }
}
