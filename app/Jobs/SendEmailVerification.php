<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


use Mail;
use App\Mail\EmailVerification;

class SendEmailVerification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

 protected $user;
 public $email_token;


    /**
     * Create a new job instance.
     *
     * @return void
     */
public function __construct($user, $email_token)
{
$this->user = $user;
$this->email_token =$email_token;
}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

    $email = new EmailVerification($this->user, $this->email_token);

    Mail::to($this->user->email)->send($email);

    }
}
