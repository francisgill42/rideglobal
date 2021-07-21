<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rides extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'ride';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    public function getAll()
    {
        return Rides::all();
    }

    public function getById($id)
    {
//        return Rides::find($id);
    }
    public function insert($starting_date,$cause,$description,$location)
    {
        $country= new Rides();
//        $country->title= $title;
        $country->starting_date= $starting_date;
        $country->cause= $cause;
        $country->description= $description;
        $country->location= $location;

        $country->save();
        return "success";
    }
    public function edit($name,$id)
    {
//        Rides::where('id',$id)->update(['name'=>$name]);
//        return "success";
    }
    public function remove($id)
    {
//        Rides::find($id)->delete();
//        Rides::where('id',$id)->update(['status'=>0]);
//        return "success";

    }
}
