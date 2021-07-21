<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Country;
use App\Models\City;
use App\Models\Riders;
use App\Models\User;

class MainPageController extends Controller
{
     public function index()
     {
         return view('website.index', $this->getCount());
     }

     public function aboutUs()
     {
         return view('website.AboutUs', $this->getCount());
     }

     public function Team()
     {
         return view('website.Team', $this->getCount());
     }
    public function Causes()
    {
        return view('website.Causes', $this->getCount());
    }
    public function Contact()
    {
		return view('website.ContactUs', $this->getCount());
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

    public function RiderLogin()
    {
        return view('website.Login', $this->getCount());
    }
	
	public function getCount(){
		
		return [
			'country' => Country::count(),
		    'city' => City::count(),
         	'riders' =>  User::where('user_type',2)->count() + Riders::count()
		];
		
	}

}
