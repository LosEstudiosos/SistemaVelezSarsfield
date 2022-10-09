<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relacion_alumno extends Model
{
    use HasFactory;

    public function relacion_alumnos(){
        return $this->belongsToMany('App\Models\relacion_alumno');
    }

    public function alumnos(){
        return $this->belongsToMany('App\Models\alumno');
    }
}
