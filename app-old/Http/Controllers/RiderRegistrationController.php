<?php

namespace App\Http\Controllers;

use App\Models\Riders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\all_country; 
use App\Models\Country;

use App\Models\Host;

use App\Models\Rides;

class RiderRegistrationController extends Controller
{

    public function index()
    {

        $all_country=  all_country::whereIn('id',Host::pluck('country_id'))->get();
        $city_count= all_country::count();
        $country_count= all_country::count();
        $riders_count= Riders::count();
        $country= Country::all();

        return view('website.Register', compact('country','country_count','city_count','riders_count','all_country'));
    }



    public function register(Request $request)
    {
        $find=Riders::where('email',$request->input('email'))->first();

        if($find)
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
             $this->insertRide($request);

             return redirect()->back()->with('message', 'You have been Registered Successfully!  For Login Please use www.rideglobal.org/rider-login');
         }
         else{
             return back();
         }


    }

    public function insertRide($request)
    {
        $data = [
            'starting_date' => $request->starting_date,
            'cause' => $request->cause,
            'description' => $request->description,
            'location' => $request->location,
        ];

        if(Rides::create($data)){
            return redirect('/showrides');
        }
        else{
            return back();
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
