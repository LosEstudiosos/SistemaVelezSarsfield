<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actas_reunione extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function temas_actas(){
        return $this->belongsToMany('App\Models\temas_acta');
    }
}
