<?php

namespace App\Http\Controllers;

//use App\Subscription;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Mail;//delet
//use App\Mail\SubscriptionMail;//delet

use \App\Repositories\SubscriptionRepository;
use \App\Repositories\AddRepository;
use App\Http\Requests\AddRequest;

class SubscriptionController extends Controller
{

    public $subscriptionRepository;
    /**
     *
     * including repositories
     *
     */
    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    /**
     *
     * Sending emails to guests
     *
     */
    public function create(AddRequest $request, AddRepository $addRepository)
    {
        $this->subscriptionRepository->guestMail($addRepository);

                   $date = \Carbon\Carbon::yesterday();

                     echo  $date->format('m\\.d');
    }

    /**
    *
    *   Sending emails to authorized users
    *
    */

    public function authEmails(AddRequest $request, AddRepository $addRepository)
    {

        $this->subscriptionRepository->authMail($addRepository);

    }
    /**
     *
     * Store subscription requests 
     * from guests and authorized users
     *
     */
    public function store(SubscriptionRepository $subscriptionRepository, \App\Http\Requests\Subscription $request)
    {

                    $subscriptionRepository->subsStore($request);

                   return redirect('skelbimu-prenumeravimas');
    }


    /**
    *
    * Guests email subscriptions confirmations
    *
    */
    public function guestConfirm($token)//needed validation
    {
        
        $confirm = \App\Subscription::where('email_token', '=', $token)->first();

        if ($confirm != null):
            $confirm->verified = 1;
            $confirm->save();
            endif;
           if ($confirm) return view('verifications.emailconfirm',['user'=>'thanks']);
            
            return redirect()->home();

    }


    /**
     * Remove the specified subscription
     *
     * 
     */
    public function destroy(\App\Subscription $subscription, $id)
    {
        
        \App\Subscription::where([
                        ['id','=', $id],
                        ['user_id', '=', auth()->user()->id]
                        ])->delete();

        return redirect()->back();
    }
}
