<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['subscription', 'user_id', 'email', 'verified', 'email_token'];
}
