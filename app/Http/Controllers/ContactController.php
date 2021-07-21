<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail;


class ContactController extends Controller
{

    public function store(Request $request)
    {
        $arr = [
           'mail' =>  $request->mail,
           'message' =>  $request->message,
        ];
        $created = Contact::create($arr);

        if($created){


			Mail::to($request->mail)
				->cc('mfmalik1975@gmail.com')
				->bcc('Wcubemarketing@gmail.com')
				->bcc('francisgill1000@gmail.com')
				->send(new ContactSendMail($request));



            return redirect()->back()->with('message', 'Your form has been sent Successfully.');

        }
        return redirect()->back()->with('err', 'Your form has not been sent Successfully.');


    }
}
