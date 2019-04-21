<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Log;

class ContactController extends Controller
{
     public function create()
    {
        return view('contact.contact');
    }

    public function store(ContactFormRequest $request)
    {
		$sentOK = false;
		
		try{
		$sentOK = \Mail::send('emails.contact',
			array(
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'user_message' => $request->get('message'),
				'website' =>$request->get('website')
			), function($message) use($request){	
			$message->from($request->get('email'));
			$message->to('example@yahoo.com', 'Person')->subject('Subject');
		});
		} catch (Exception $e) {
			Log::info('Caught exception from contact form: ',  $e->getMessage(), "\n");
		}
		
		if($sentOK){
			return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
		}else{
			return \Redirect::route('contact')->with('error', 'There was an error in submitting your email, please try again!');
		}
    }
}
