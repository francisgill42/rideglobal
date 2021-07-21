<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table= 'country';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];
    /**
     * @var mixed|string
     */

    public function getAll()
    {
        return Country::all();
    }

    public function getById($id)
    {
        return Country::find($id);
    }
    public function insert($name)
    {
        $country= new Country();
        $country->name= $name;
        $country->save();
        return "success";
    }
    public function edit($name,$id)
    {
        Country::where('id',$id)->update(['name'=>$name]);
        return "success";
    }
    public function remove($id)
    {
        Country::find($id)->delete();
        Country::where('id',$id)->update(['status'=>0]);
        return "success";

    }
}
