<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preceptore extends Model
{
    use HasFactory;

    public function user(){
        return $this->BelongsTo('App\Models\User');
    }

    public function inasistencias(){
        return $this->hasMany('App\Models\inasistencia');
    }
}
