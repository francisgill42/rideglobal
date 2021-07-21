<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \App\Models\City;
use \App\Models\Country;
use \App\Models\Riders;

class DashboardController extends Controller
{

    public function index()
    {
        $data = [
            'city' => City::count(),
            'country' => Country::count(),
            'riders' => Riders::count()
        ];

        // return $data;

        return view('index', $data);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/login');
    }
}
