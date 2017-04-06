<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\emailsDB;

class RegisterController extends Controller
{

    public function register(Request $request)
    {	
  		Mail::send('emails.register',$request->all(), function ($message) {
            $message->from('info@securityfighter.com', 'Security Fighter');
            $message->to('gelmangreg@gmail.com')->subject('new interest!');

		});

  		emailsDB::create($request->all());
  			return response()->json([
  				'message'=>'email saved successfully!'
  				], 200);

    	
    }
}

