<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localidad extends Model
{
    use HasFactory;

    public function departamento(){
        return $this->belongsTo('App\Models\departamento');
    }

    public function alumnos(){
        return $this->hasMany('App\Models\alumno');
    }
}
