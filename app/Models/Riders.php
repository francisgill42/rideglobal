<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class Riders extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'riders';

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
        return Riders::all();
    }

    public function getById()
    {
        return Riders::find(2);
    }
    public function insert($name,$email,$country_id,$city_id,$password)
    {
        $city = new Riders();
        $city->name = $name;
        $city->email = $email;
        $city->country_id = $country_id;
        $city->city_id = $city_id;
        $city->password = $password;
        $city->save();

        return "success";
    }
    public function edit($id,$name)
    {
        Riders::where('id',$id)->update(['name'=>$name]);
        return "success";

    }
    public function remove($id)
    {
        Riders::find($id)->delete();
        return "success";
    }
    public function login($email,$password)
    {
        $result= Riders::where('email',$email)->where('password',$password)->get();
        if (Hash::check($password, $result->password)) {
            return $result;
        }

        else
            return null;

    }
}

