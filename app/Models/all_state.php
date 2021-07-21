<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_state extends Model
{
    use HasFactory;
    protected $table='all_states';

    public function getAll()
    {
        return all_state::all();
    }
}
