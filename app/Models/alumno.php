<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

    public function Responsables(){
        return $this->belongsToMany('App\Models\Responsable');
    }

    public function relacion_alumnos(){
        return $this->belongsToMany('App\Models\relacion_alumno');
    }

    public function nacionalidad(){
        return $this->belongsTo('App\Models\Nacionalidad');
    }

    public function localidad(){
        return $this->belongsTo('App\Models\localidad');
    }

    public function sexo(){
        return $this->belongsTo('App\Models\Sexo');
    }

    public function cursos(){
        return $this->belongsToMany('App\Models\curso');
    }

    public function libreta(){
        return $this->hasMany('App\Models\libreta');
    }

    public function estado_alumno(){
        return $this->belongsTo('App\Models\estado_alumno');
    }

    public function inasistencia(){
        return $this->hasOne('App\Models\inasistenacia');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }
}
