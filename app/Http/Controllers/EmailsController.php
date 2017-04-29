<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
     
        Mail::send('emails.contact', $request->all(), function ($message) {
            $message->from('info@securityfighter.com', 'Security Fighter');
            $message->to('gelmangreg@gmail.com')->subject('new interest!');
        });
    }
}