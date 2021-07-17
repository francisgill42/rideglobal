<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchRidesController extends Controller
{
    public function index(){

        $city= (new \App\Models\City)->getAll();
        $country= (new \App\Models\Country)->getAll();
        $city_count= (new \App\Models\City)->getAll()->count();
        $country_count= (new \App\Models\Country)->getAll()->count();
        $riders_count= (new \App\Models\Riders)->getAll()->count();

        return view('website.Rides', compact('city','country','country_count','city_count','riders_count'));
    }
}
