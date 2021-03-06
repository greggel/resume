<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailsController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder(Request $request, $id)
    {
     
        Mail::send('emails.sendEmailReminder', $request->all(), function ($message) {
            $message->from('info@greggelman.com', '@greggel');
            $message->to('gelmangreg@gmail.com')->subject('new interest!');
        });
        
    }
}