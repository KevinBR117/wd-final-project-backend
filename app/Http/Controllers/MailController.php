<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendMail(Request $request)
    {
        // $mailData = [
        //     'name' => $request->get('name'),
        //     'cellphone' => $request->get('cellphone'),
        //     'comments' => $request->get('comments')

        // ];
         
        Mail::to('kevinbarbozarodriguez117@gmail.com')->send(new ContactMail($request->get('name'), $request->get('cellphone'), $request->get('comments')));
           
        // dd("Email is sent successfully.");
    }
}
