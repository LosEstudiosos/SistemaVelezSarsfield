<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instancia extends Model
{
    use HasFactory;

    public function libretas(){
        return $this->hasMany('App\Models\libreta');
    }
}
