<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $city= (new \App\Models\City)->getAll()->count();
        $country= (new \App\Models\Country)->getAll()->count();
        $riders= (new \App\Models\Riders)->getAll()->count();

//        dd(auth()->user()->id);

        return view('index', compact('city','country', 'riders'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/login');
    }
}
