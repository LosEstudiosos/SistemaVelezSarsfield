<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libreta extends Model
{
    use HasFactory;

    public function alumnos(){
        return $this->belongsTo('App\Models\alumno');
    }

    public function instancia(){
        return $this->belongsTo('App\Models\instancia');
    }

    public function asignatura(){
        return $this->belongsTo('App\Models\asignatura');
    }

    public function CicloLectivo(){
        return $this->hasMany('App\Models\CicloLectivo');
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePrimerTrimestreByAlumno($query, $id_alumno, $ciclo_lectivo_id)
    {
        return $query->leftJoin("instancias", "instancias.id", "=", "libretas.instancia_id")
                    ->where("instancias.instancia", "=", 'Primer Trimestre')
                    ->where("libretas.alumno_id", "=", $id_alumno)
                    ->where("libretas.ciclo_lectivo_id", "=", $ciclo_lectivo_id)
                    ->select("libretas.calificacion", "libretas.asignatura_id"); 
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSegundoTrimestreByAlumno($query, $id_alumno, $ciclo_lectivo_id)
    {
        return $query->leftJoin("instancias", "instancias.id", "=", "libretas.instancia_id")
                    ->where("instancias.instancia", "=", 'Segundo Trimestre')
                    ->where("libretas.alumno_id", "=", $id_alumno)
                    ->where("libretas.ciclo_lectivo_id", "=", $ciclo_lectivo_id)
                    ->select("libretas.calificacion", "libretas.asignatura_id"); 
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTercerTrimestreByAlumno($query, $id_alumno, $ciclo_lectivo_id)
    {
        return $query->leftJoin("instancias", "instancias.id", "=", "libretas.instancia_id")
                    ->where("instancias.instancia", "=", 'Tercer Trimestre')
                    ->where("libretas.alumno_id", "=", $id_alumno)
                    ->where("libretas.ciclo_lectivo_id", "=", $ciclo_lectivo_id)
                    ->select("libretas.calificacion", "libretas.asignatura_id"); 
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDiciembreByAlumno($query, $id_alumno, $ciclo_lectivo_id)
    {
        return $query->leftJoin("instancias", "instancias.id", "=", "libretas.instancia_id")
                    ->where("instancias.instancia", "=", 'Diciembre')
                    ->where("libretas.alumno_id", "=", $id_alumno)
                    ->where("libretas.ciclo_lectivo_id", "=", $ciclo_lectivo_id)
                    ->select("libretas.calificacion", "libretas.asignatura_id"); 
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFebreroByAlumno($query, $id_alumno, $ciclo_lectivo_id)
    {
        return $query->leftJoin("instancias", "instancias.id", "=", "libretas.instancia_id")
                    ->where("instancias.instancia", "=", 'Febrero')
                    ->where("libretas.alumno_id", "=", $id_alumno)
                    ->where("libretas.ciclo_lectivo_id", "=", $ciclo_lectivo_id)
                    ->select("libretas.calificacion", "libretas.asignatura_id"); 
    }
}
