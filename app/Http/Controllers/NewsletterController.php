<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke()
    {
        request()->validate(['email'=>'required|email']);
        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us18'
        ]);
        try{
            $response = $mailchimp->lists->addListMember('81912ff90a',[
                'email_address'=>request('email'),
                'status'=>'subscribed',
            ]);
        }catch (\Exception $e){
            throw ValidationException::withMessages([
                'email'=>'this email could not be in our list'
            ]);
        }

        return redirect('/')->with('success','You are now in our newsletter!');
    }
}
