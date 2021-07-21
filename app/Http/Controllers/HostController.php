<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\User;

use \App\Models\Host;

class HostController extends Controller
{
    public function index()
    {
        $host_data= Host::all();
        $city_data= [];
        $users=User::where('user_type',2)->get();
//        dd($users);

        return view('host', compact('host_data', 'city_data','users'));
    }
    public function add(Request $request)
    {
		
		return $request->all();
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
		$user = User::find($id);
		
		return $user->delete() ? redirect('/showhost') : back();
		
    }
}
