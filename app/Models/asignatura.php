<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignatura extends Model
{
    use HasFactory;

    /* public function libreta(){
        return $this->hasMany('App\Models\libreta');
    } */

    public function asignaturas_cursos(){
        return $this->hasMany('App\Models\asignaturas_curso');
    }

    public function tipo_asignatura(){
        return $this->belongsTo('App\Models\tipo_asignatura');
    }

    public function Alumnos_A(){
        return $this->belongsToMany('App\Models\alumno', 'libretas');
    }
}
