<?php

namespace App\Http\Controllers;
use App\Models\all_city;
use App\Models\all_state;
use App\Models\City;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $city= (new \App\Models\City)->getAll();
        $country= (new \App\Models\Country)->getAll();
        $host= (new \App\Models\Host)->getAll();

        return view('city', compact('city','country', 'host'));
    }

    public function add(Request $request)
    {
        $country_id=$request->input('country_id');
        $city_name=$request->input('name');
        $host_id=$request->input('host_id');
        $result= (new \App\Models\City)->insert($country_id,$city_name,$host_id);
        if($result=="success")
           return redirect('showcity');
    }
    public function getAll()
    {
        $cities= (new \App\Models\City)->getAll();
        dd($cities);
    }
    public function getById()
    {
       $city= (new \App\Models\City)->getById();
    }
    public function getByCountryId(Request $request)
    {
        $id=$request->input('id');
        $result=$city= (new \App\Models\City)->getByCountryId($id);
        return $result;
    }
    public function edit(Request $request)
    {
        $name=$request->input('name');
        $id=$request->input('id');
        $result=(new \App\Models\City)->edit($id,$name);

        if($result=="success")
            return redirect('showcity');
    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        $result=(new \App\Models\City)->remove($id);
        if($result=="success")
            return redirect('showcity');
    }
    public function getcityByCountry(Request $request)
    {
        return all_city::where('country_id',$request->input('id'))->get();				
    }
	
	    // public function getcityByCountry(Request $request)
    // {

    //     $country_id=$request->input('id');
        
    //     $states_id=all_state::where('country_id',$country_id)->get()->toArray();
    //     $states_id_quantity=all_state::where('country_id',$country_id)->count();
		
		
    //    $city_found=false;
    //     for ($i=0;$i<$states_id_quantity;$i++)
    //     {
    //         $country_name[$i]=all_city::where('state_id',$states_id[$i]['id'])->get();
    //         $check_city=all_city::where('state_id',$states_id[$i]['id'])->count();
    //         if($check_city>0)
    //           $city_found=True;
    //     }

		
    //     return $country_name;
    //    return response()
    //        ->json(['country' => $country_name, 'city_found' => $city_found]);
    // }
}
