<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Mail;
use App\User;
use App\emailsDB;

class RegisterController extends Controller
{

    public function register(Request $request)
    {


        $this->validate($request, [
          'emails' => 'required|email|unique:addresses,name'
        ]);

        $emails = Input::get('emails');
        DB::table('addresses')->insert(
        ['name' => $emails]
        );


        Mail::send('emails.register', $request->all(), function ($message) {
            $message->from('info@greggelman.com', 'Administrator');
            $message->to('gelmangreg@gmail.com')->subject('new interest!');
        });



        return redirect('/');
      
    }
    
}

