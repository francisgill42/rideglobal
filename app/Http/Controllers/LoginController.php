<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Login');
    }
    public function login(){
        return redirect('/admin/home');
    }
}