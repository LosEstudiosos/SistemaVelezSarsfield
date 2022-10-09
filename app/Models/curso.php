<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    public function alumnos(){
        return $this->belongsToMany('App\Models\alumno');
    }

    public function asignaturas_cursos(){
        return $this->hasMany('App\Models\asignaturas_curso');
    }
}
