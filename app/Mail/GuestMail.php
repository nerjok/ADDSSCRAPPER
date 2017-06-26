<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GuestMail extends Mailable
{
    use Queueable, SerializesModels;

public $email_token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_token)
    {
        $this->email_token = $email_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.guestverify');
    }
}
