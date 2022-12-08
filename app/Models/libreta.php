<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libreta extends Model
{
    use HasFactory;

    public function alumnos(){
        return $this->belongsTo('App\Models\alumno');
    }

    public function instancia(){
        return $this->belongsTo('App\Models\instancia');
    }

    public function asignatura(){
        return $this->belongsTo('App\Models\asignatura');
    }

    public function CicloLectivo(){
        return $this->hasMany('App\Models\CicloLectivo');
    }
    
}
