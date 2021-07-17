<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Host extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'hosts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    public function getAll()
    {
            return Host::all();
    }

    public function getById()
    {
        return Host::find(2);
    }
    public function insert($name,$city_id,$email)
    {
        $host= new Host();
        $host->name= $name;
        $host->email= $email;
        $host->city_id= $city_id;
        $host->request_status="Approved";
        $host->save();
        return ("success");
    }
    public function edit($id,$name)
    {
        Host::where('id',$id)->update(['name'=>$name]);
        return "success";
    }
    public function remove($id)
    {
        Host::find($id)->delete();
        return "success";
    }
    public function register($name,$email,$city_id,$request_status,$user_type){
        $host= new Host();
        $host->name= $name;
        $host->email= $email;
        $host->city_id= $city_id;
        $host->request_status=$request_status;
        $host->user_type=$user_type;
        $host->save();

        return "success";
    }

}
