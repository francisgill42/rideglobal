<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\User;

class HostController extends Controller
{
    public function index()
    {
        $host_data= (new \App\Models\Host)->getAll();
        $city_data= (new \App\Models\City)->getAll();
        $users=User::where('user_type',2)->get();
//        dd($users);

        return view('host', compact('host_data', 'city_data','users'));
    }
    public function add(Request $request)
    {
        $city_id=$request->input('city_id');
        $name=$request->input('name');
        $email=$request->input('email');
        $result=(new \App\Models\Host)->insert($name,$city_id,$email);
        if ($result=="success")
        {
            return redirect('/showhost');
        }
    }
    public function getAll()
    {
        $host= (new \App\Models\Host)->getAll();
        dd($host);
    }
    public function getById()
    {
        $host= (new \App\Models\Host)->getById();
        dd($host);
    }
    public function edit(Request $request)
    {
        $id=$request->input('id');
        $name=$request->input('name');
        $result=(new \App\Models\Host)->edit($id,$name);
        if ($result=="success")
        {
            return redirect('/showhost');
        }
    }
    public function destroy($id)
    {
        $result=(new \App\Models\Host)->remove($id);
        if ($result=="success")
        {
            return redirect('/showhost');
        }
    }
//    public function register(Request $request)
//    {
//        $name=$request->input('name');
//        $email=$request->input('email');
//        $city_id=$request->input('city');
//        $user_type=$request->input('user_type');
//
//
////        $contact=$request->input('contact');
//        $request_status="Pending";
//        $result=(new \App\Models\Host)->register($name,$email,$city_id,$request_status,$user_type);
//
//        if($result=="success")
//        {
//            return redirect()->back()->with('message', 'You have been Registered Successfully! For Login Please use www.rideglobal.org/login');
//        }
//    }

}
