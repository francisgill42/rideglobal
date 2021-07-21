<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RidesController extends Controller
{
    public function index()
    {
        $rides_data= (new \App\Models\Rides)->getAll();
        return view('rides', compact('rides_data'));
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
//        $title=$request->input('title');
        $starting_date=$request->input('starting_date');
        $cause=$request->input('cause');
        $description=$request->input('description');
        $location=$request->input('location');

//        dd($title,$starting_date,$cause,$description);

        $result=(new \App\Models\Rides)->insert($starting_date,$cause,$description,$location);
        if($result=="success")
            return redirect('/showrides');

    }
    public function show($id)
    {
//        $country= (new \App\Models\Country)->getById($id);
//        dd($country);
    }
    public function edit(Request $request)
    {
        dd($request->input('title'));
//        $name=$request->input('name');
//        $id=$request->input('id');
//        $result= (new \App\Models\Country)->edit($name,$id);
//        if($result=="success")
//            return redirect('/admin/country');
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy(Request $request)
    {
//        $id=$request->input('id');
//        $result=(new \App\Models\Country())->remove($id);
//        if($result=="success")
//            return redirect('/admin/country');
    }
    public function getAll()
    {
//        $countries= (new \App\Models\Country())->getAll();
//        dd($countries);
    }
}
