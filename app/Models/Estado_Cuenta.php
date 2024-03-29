<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_Cuenta extends Model
{
    use HasFactory;
    protected $table = "estados_cuenta";

    public function users(){ 
        return $this->hasMany('App\Models\User');
    }
}
