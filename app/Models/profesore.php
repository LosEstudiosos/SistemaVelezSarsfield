<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesore extends Model
{
    use HasFactory;

    public function asignaturas_cursos(){
        return $this->hasMany('App\Models\asignaturas_curso');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }
}
