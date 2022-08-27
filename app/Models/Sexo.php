<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    public function alumnos(){
        return $this->hasMany('App\Models\alumno');
    }
}
