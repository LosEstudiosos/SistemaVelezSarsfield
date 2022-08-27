<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temas_acta extends Model
{
    use HasFactory;

    public function actas_reuniones(){
        return $this->belongsToMany('App\Models\acta_reunione');
    }
}
