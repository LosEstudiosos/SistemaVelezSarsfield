<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_inasistencia extends Model
{
    use HasFactory;

    public function inasistencias(){
        return $this->hasMany('App\Models\inasistencia');
    }
}
