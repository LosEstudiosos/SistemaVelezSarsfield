<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajeria extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeReceived($query)
    {
        return $query->join("users_mensajerias", "users_mensajerias.mensajeria_id", "=", "mensajerias.id")
                    ->join("marcador_mensajerias", "marcador_mensajerias.id", "=", "users_mensajerias.marcador_id")
                    ->where("marcador_mensajerias.posicion", "=", 'Bandeja de Entrada')
                    ->where("users_mensajerias.user_id", "=", auth()->id())
                    ->select("mensajerias.*", "users_mensajerias.leido", "users_mensajerias.destacado")->distinct(); 
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSended($query)
    {
        return $query->join("users_mensajerias", "users_mensajerias.mensajeria_id", "=", "mensajerias.id")
                    ->join("marcador_mensajerias", "marcador_mensajerias.id", "=", "users_mensajerias.marcador_id")
                    ->where("marcador_mensajerias.posicion", "=", 'Bandeja de Salida')
                    ->where("users_mensajerias.user_id", "=", auth()->id())
                    ->select("mensajerias.*", "users_mensajerias.leido", "users_mensajerias.destacado")->distinct(); 
    }
    
    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDrafted($query)
    {
        return $query->join("users_mensajerias", "users_mensajerias.mensajeria_id", "=", "mensajerias.id")
                    ->join("marcador_mensajerias", "marcador_mensajerias.id", "=", "users_mensajerias.marcador_id")
                    ->where("marcador_mensajerias.posicion", "=", 'Borradores')
                    ->where("users_mensajerias.user_id", "=", auth()->id())
                    ->select("mensajerias.*", "users_mensajerias.leido", "users_mensajerias.destacado")->distinct(); 
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTrashed($query)
    {
        return $query->join("users_mensajerias", "users_mensajerias.mensajeria_id", "=", "mensajerias.id")
                    ->join("marcador_mensajerias", "marcador_mensajerias.id", "=", "users_mensajerias.marcador_id")
                    ->where("marcador_mensajerias.posicion", "=", 'Papelera')
                    ->where("users_mensajerias.user_id", "=", auth()->id())
                    ->select("mensajerias.*", "users_mensajerias.leido", "users_mensajerias.destacado")->distinct(); 
    }

}