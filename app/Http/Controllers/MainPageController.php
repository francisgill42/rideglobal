<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use \App\Models\City;
use \App\Models\Country;
use \App\Models\Riders;

class MainPageController extends Controller
{
    public function index()
    {
    return view('website.index', $this->getData());
    }
    public function aboutUs()
    {
         return view('website.AboutUs', $this->getData());
    }
    public function Team()
    {
        return view('website.Team', $this->getData());
    }
    public function Causes()
    {
        return view('website.Causes', $this->getData());
    }
    public function Contact()
    {
        return view('website.ContactUs', $this->getData());
    }
    public function RiderLogin()
    {
        return view('website.Login', $this->getData());
    }


    public function SendMail(Request $request)
    {
        \Mail::send( 'contactMail',array(
            'message' => $request->input('message'),

        ), function($message) use ($request){
            $message->from($request->input('mail'));
            $message->to('yousufmachiyara91@gmail.com', 'Admin');
        });
        return redirect()->back()->with(['success' => 'Your Message Submit Successfully']);
    }   

    public function getData()
    {
         return [
           'city' => City::count(),
           'country' => Country::count(),
           'riders' => Riders::count()
        ];
    }

}
