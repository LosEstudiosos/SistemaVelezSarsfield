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

    public function scopeAllData($query){
        return $query->join("tipo_recordatorios", "tipo_recordatorios.id", "=", "recordatorios.tipo_recordatorio_id")
                    ->where("recordatorios.user_id", "=", auth()->id())
                    ->select("recordatorios.*", "tipo_recordatorios.eventColor as color"); 
    }
    // recordatorios tipo_recordatorios
}
    