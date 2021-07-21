<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HostLocation extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'host_location';

    protected $fillable = [
        'city_id',
        'host_id',
    ];


}