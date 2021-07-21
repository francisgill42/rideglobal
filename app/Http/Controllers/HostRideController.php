<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\all_country;
use App\Models\City;
use App\Models\Riders;
use App\Models\User;
	

class HostRideController extends Controller
{
    public function index()
    {
		
		$data = [
			'all_city' => [],
			'all_country' => all_country::all(),
			
			'country_count' => Country::count(),
		    'city_count' => City::count(),
         	'riders_count' =>  User::where('user_type',2)->count() + Riders::count()
		];
		
		
		
        return view('website.host', $data);
    }
}
