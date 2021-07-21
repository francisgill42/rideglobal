<?php

namespace App\Http\Controllers;

use App\Models\Riders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\all_country; 

use App\Models\Host;
use App\Models\Rides;

use App\Models\Country;
use App\Models\City;
use App\Models\User;

class RiderRegistrationController extends Controller
{

    public function index()
    {
		
		
		$data = [
			
			'country' => all_country::whereIn('id',Host::pluck('country_id'))->get(),
			'city_count' => City::count(),
			'country_count' => Country::count(),
			'riders_count' =>  User::where('user_type',2)->count() + Riders::count(),
			'all_country' => all_country::whereIn('id',Host::pluck('country_id'))->get()
		];
		
		return view('website.Register', $data);

        $all_country=  all_country::whereIn('id',Host::pluck('country_id'))->get();
        $city_count= all_country::count();
        $country_count= all_country::count();
        $riders_count= Riders::count();
        $country= Country::all();

        return view('website.Register', compact('country','country_count','city_count','riders_count','all_country'));
    }


    public function indexOld()
    {
        $all_country= (new \App\Models\all_country)->getAll();

        $city= (new \App\Models\City)->getAll();
        $country= (new \App\Models\Country)->getAll();
        $city_count= (new \App\Models\City)->getAll()->count();
        $country_count= (new \App\Models\Country)->getAll()->count();
        $riders_count= (new \App\Models\Riders)->getAll()->count();
        return view('website.Register', compact('city','country','country_count','city_count','riders_count','all_country'));
    }

    public function register(Request $request)
    {
        $find=Riders::where('email',$request->input('email'))->first();

        if($find!=null)
        {
            return redirect()->back()->with('message', 'This Email is Already Registered!');
        }

       $name=$request->input('name');
       $email=$request->input('email');
       $country_id=$request->input('country');
       $city_id=$request->input('city');
       $password=Hash::make($request->input('password'));

       $result=(new \App\Models\Riders())->insert($name,$email,$country_id,$city_id,$password);
         if($result=="success")
         {
			 
             return redirect()->back()->with('message', 'You have been Registered Successfully!  For Login Please use www.rideglobal.org/rider-login');
         }


    }
	

    public function login(Request $request)
    {
       $email=$request->input('email');
       $password=$request->input('password');
       $result=(new \App\Models\Riders())->login($email,$password);
       $city= (new \App\Models\City)->getAll()->count();
       $country= (new \App\Models\Country)->getAll()->count();
       $riders= (new \App\Models\Riders)->getAll()->count();




//       dd($result[0]->id);
        session(['user' => $result[0]]);


        if($result!=null)
        {
            return view('website.index',compact('result','city','country', 'riders'));
        }
//        else
//        return redirect()->back()->with('message', 'Login Failed');
    }

    public function logout()
    {
        session(['user' => null]);
        return redirect('/');
    }

}
