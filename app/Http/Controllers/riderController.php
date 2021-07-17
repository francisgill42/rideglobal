<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riderController extends Controller
{
    public function index()
    {
        $rider_data= (new \App\Models\Riders)->getAll();
//        dd($rider_data);
//        $city_id=$rider_data->city_id;
//        $country_name= (new \App\Models\Country)->getById($country_id);
//        $city_name= (new \App\Models\City)->getById($city_id);

        return view('Riders',compact('rider_data'));
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $name=$request->input('name');
        $result=(new \App\Models\Country)->insert($name);
        if($result=="success")
            return redirect('/admin/country');

    }
    public function show($id)
    {
        $country= (new \App\Models\Country)->getById($id);
        dd($country);
    }
    public function edit(Request $request)
    {
        $name=$request->input('name');
        $id=$request->input('id');
        $result= (new \App\Models\Country)->edit($name,$id);
        if($result=="success")
            return redirect('/admin/country');
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        $result=(new \App\Models\Country())->remove($id);
        if($result=="success")
            return redirect('/admin/country');
    }
    public function getAll()
    {
        $countries= (new \App\Models\Country())->getAll();
        dd($countries);
    }
}
