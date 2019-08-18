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
          'emails' => 'required|unique:addresses,name'
        ]);
  /*
       $v = Validator::make($request->all(), [
          'name' => 'bail|required|email|unique:addresses'

      ]);

      if ($v->fails())
      {
          return redirect()->back()->withErrors($v->errors());
      }*/

        $emails = Input::get('emails');
        DB::table('addresses')->insert(
        ['name' => $emails]
        );


        Mail::send('emails.register', $request->all(), function ($message) {
            $message->from('info@greggelman.com', 'Administrator');
            $message->to('gelmangreg@gmail.com')->subject('new interest!');
        });



        return redirect('/');
      


     /*Schema::table('addresses', function (Blueprint $table) {
        $table->timestamp('created_at');
        $table->increments('id');
      });*/
    }

    /*public function withValidator($validator){

        $validator->after(function ($validator) {
            if ($this->somethingElseIsInvalid()) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });

    }*/
    
}

