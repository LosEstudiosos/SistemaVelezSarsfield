<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignaturas_curso extends Model
{
    use HasFactory;

    public function asignatura(){
        return $this->belongsTo('App\Models\asignatura');
    }

    public function curso(){
        return $this->belongsTo('App\Models\curso');
    }

    public function profesore(){
        return $this->belongsTo('App\Models\profesore');
    }
}
