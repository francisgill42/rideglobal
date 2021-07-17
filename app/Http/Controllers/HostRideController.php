<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\all_country;
use \App\Models\all_city;
use \App\Models\Riders;

use Cache;
	

class HostRideController extends Controller
{
    public function index()
    {

        $countries = Cache::remember('countries',86400 * 365 ,function(){
            return all_country::all();
        });
        $countries_count = Cache::remember('countries_count',86400 * 365 ,function(){
            return all_country::count();
        });
        $cities_count = Cache::remember('city_count',86400 * 365 ,function(){
            return all_country::count();
        });

        $all_country= $countries; //all_country::all();
        $city_count= $cities_count;
        $country_count=  $countries_count; //all_country::count();
        $riders_count= Riders::count();
		
        return view('website.host', compact('all_country','city_count','country_count','riders_count'));
    }
}
