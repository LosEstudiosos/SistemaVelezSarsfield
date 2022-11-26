<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla1 extends Model
{
    use HasFactory;

    public function tabla2s(){
        return $this->belongsToMany('App\Models\tabla2', 'tabla3s');
    }
}
