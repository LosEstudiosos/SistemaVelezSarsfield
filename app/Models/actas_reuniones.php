<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actas_reuniones extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_creacion', 'cuerpo', 'acuerdo'];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function temas_actas(){
        return $this->belongsToMany('App\Models\temas_acta');
    } 
}
