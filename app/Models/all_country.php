<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_country extends Model
{
    use HasFactory;
    protected $table='all_country';

    public function getAll()
    {
        return all_country::all();
    }
}
