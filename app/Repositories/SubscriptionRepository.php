<?php

namespace App\Repositories;


use Illuminate\Http\Request;
//use App\Http\Requests\Subscription;
//use \App\Subscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;

class SubscriptionRepository
{


    /***************************************
    *
    * Store subscriptions
    *
    ***************************************/
    public function subsStore($request)
    {

                    $subscription = new \App\Subscription();

                   $subscription->subscription = $request->input('subscription');
                   if (\Auth::check()) {
                    $subscription->email = \Auth::user()->email;
                    
                    $subscription->user_id = \Auth::user()->id;

                    } else {

                    /* store guest requests */
                   $subscription->email = $request->input('email');

                   $link = uniqid();

                   $subscription->email_token = $link;
                    
                    Mail::to($request->input('email'))->send(new \App\Mail\GuestMail($link));
                    }
                   $subscription->save();
    }

    /******************************************
    *
    * Guest mails
    *
    ******************************************/
    public function guestMail($addRepository)
    {

            $internalErrors = libxml_use_internal_errors(true);

            
            foreach (\App\Subscription::select('subscription', 'email')->where([['user_id', '=', null],
                                                                            ['verified', '<>', 0]])->cursor() as $subs) {
                
                echo $subs->subscription, $subs->email.'<br>';

                    //hetting available adds
                    $sites = array('cvbankas', 'dirba', 'darbo', 'cv', 'cvkodas','cvzona', 'cvmarket', 'cvme', 'cvonline');
                        foreach ($sites as $site) {

                            if (preg_match_all("/.{0,}{$site}.{0,}/", $subs->subscription)){
                                
                                $file = file_get_contents($subs->subscription);
                                
                                $conte = $addRepository->{$site}($file);
                            }
                        }

                        Mail::to($subs->email)->send(new \App\Mail\SubsGuestMail($subs->subscription, $conte));

            }

          libxml_use_internal_errors($internalErrors);
    }


    /******************************************
    *
    * auth mails
    *
    ******************************************/
    public function authMail($addRepository)
    {
                        $internalErrors = libxml_use_internal_errors(true);

       $users = \App\User::where('verified', '<>', 0)->get();

       foreach ($users as $user) {
           
           if(!$user->myAdds->isEmpty()){
echo $user->myAdds.'<br>';
                $conte = [];

               foreach($user->myAdds as $subinfo){
                    
                        $sites = array('darbo', 'cvbankas', 'dirba', 'cv', 'cvkodas', 'cvzona', 'cvmarket', 'cvme', 'cvonline');
                        
                        foreach ($sites as $site) {

                            if (preg_match_all("/.{0,}{$site}.{0,}/", $subinfo->subscription)){
                                

                                //echo '<br>'.$subinfo->subscription.'<br>';
                                $file = file_get_contents($subinfo->subscription);
                                
                                $conte[] = $addRepository->{$site}($file, 15);
                            }
                        }


                   echo "$subinfo->subscription <b> $subinfo->email </b>";
                   echo '<br>';
               }

            Mail::to($user->email)->send(new SubscriptionMail($user->email, $conte));

           }
       }

                 libxml_use_internal_errors($internalErrors);

    }
}