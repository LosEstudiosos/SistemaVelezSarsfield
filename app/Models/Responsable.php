<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    public function user(){
        return $this->BelongsTo('App\Models\User');
    }

    public function relacion_alumnos(){
        return $this->belongsToMany('App\Models\relacion_alumno');
    }

    public function alumnos(){
        return $this->belongsToMany('App\Models\alumno');
    }
}
