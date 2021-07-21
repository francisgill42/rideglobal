<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rides;

class RidesController extends Controller
{
    public function index()
    {
        $rides_data = Rides::all();
        return view('rides', compact('rides_data'));
    }

    public function store(Request $request)
    {
        $data = [
            'starting_date' => $request->starting_date,
            'cause' => $request->cause,
            'description' => $request->description,
            'location' => $request->location,
        ];

        if(Rides::create($data)){
            return redirect('/showrides');
        }
        else{
            return back();
        }

    }

}
