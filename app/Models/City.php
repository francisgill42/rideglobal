<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Scalar\String_;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'city';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    public function getcountybyid()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
    public function getAll()
    {
        return City::all();
    }

    public function getById()
    {
        return City::where(2);
    }
    public function getByCountryId($id)
    {
        return $id;
//        return City::where('country_id')->$this->getAll();
    }
    public function insert($country_id,$city_name,$host_id)
    {
        $city = new City();
        $city->country_id = $country_id;
        $city->host_id = $host_id;
        $city->name = $city_name;
        $city->save();

        return "success";
    }
    public function edit($id,$name)
    {
        City::where('id',$id)->update(['name'=>$name]);
        return "success";

    }
    public function remove($id)
    {
        City::find($id)->delete();
        return "success";
    }
}
