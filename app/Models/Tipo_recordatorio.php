<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_recordatorio extends Model
{
    use HasFactory;

    public function Recordatorios(){
        return $this->hasMany('App\Models\Recordatorio');
    }
}
