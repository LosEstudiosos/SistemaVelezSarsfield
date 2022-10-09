<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;

    public function provincia(){
        return $this->belongsTo('App\Models\provincia');
    }

    public function localidades(){
        return $this->hasMany('App\Models\localidad');
    }
}
