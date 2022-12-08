<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloLectivo extends Model
{
    use HasFactory;

    public function alumnos(){
        return $this->belongsToMany('App\Models\alumno');
    }

    public function libreta(){
        return $this->belongsTo('App\Models\libreta');
    }
}
