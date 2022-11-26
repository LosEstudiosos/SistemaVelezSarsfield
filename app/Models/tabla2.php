<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla2 extends Model
{
    use HasFactory;

    public function tabla1s(){
        return $this->belongsToMany('App\Models\tabla1', 'tabla3');
    }
}
