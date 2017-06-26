<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subs;
    public $conte;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscription, $conte)
    {
        $this->subs = $subscription;
        $this->conte = $conte;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            
        return $this->markdown('email.subscription');
    }
}
