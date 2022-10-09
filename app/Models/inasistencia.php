<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inasistencia extends Model
{
    use HasFactory;

    public function alumno(){
        return $this->belongsTo('App\Models\alumno');
    }

    public function preceptore(){
        return $this->belongsTo('App\Models\preceptore');
    }

    public function tipo_inasistencia(){
        return $this->belongsTo('App\Models\tipo_inasistencia');
    }
}
