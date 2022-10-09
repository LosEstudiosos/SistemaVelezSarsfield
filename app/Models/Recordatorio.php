<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function Tipos_recordatorio(){
        return $this->belongsTo('App\Models\Tipo_recordatorio');
    }
}
