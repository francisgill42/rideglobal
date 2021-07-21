<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_city extends Model
{
    use HasFactory;
    protected $table='all_city';

    public function getAll()
    {
        return all_city::all();
    }
}
