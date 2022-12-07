<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

    public function cursos(){
        return $this->belongsToMany('App\Models\curso','clases');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Asignaturas(){
        return $this->belongsToMany('App\Models\asignatura','libretas');
    }
    
    public function Libretas(){
        return $this->hasMany('App\Models\libreta');
    }
    
}
