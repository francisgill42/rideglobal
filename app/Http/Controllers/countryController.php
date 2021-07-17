<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class countryController extends Controller
{
    public function index()
    {
        $country_data= (new \App\Models\Country())->getAll();
        return view('country', compact('country_data'));
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $name=$request->input('name');
        $result=(new \App\Models\Country)->insert($name);
        if($result=="success")
          return redirect('/showcountry');

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
             return redirect('/showcountry');
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        $result=(new \App\Models\Country())->remove($id);
        if($result=="success")
            return redirect('/showcountry');
    }
    public function getAll()
    {
        $countries= (new \App\Models\Country())->getAll();
        dd($countries);
    }
}
