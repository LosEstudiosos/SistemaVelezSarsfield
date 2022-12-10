<?php

namespace App\Http\Livewire\Admin;

use App\Models\Alumno;
use App\Models\asignatura;
use App\Models\CicloLectivo;
use App\Models\clase;
use App\Models\curso;
use App\Models\libreta;
use App\Models\User;
use Livewire\Component;

class LibretaIndex extends Component
{
    public $id_alumno;

    public function mount($id_alumno, $ciclo_lectivo_id){
        $this->id_alumno = $id_alumno;
        $this->ciclo_lectivo_id = $ciclo_lectivo_id;
    }
    
    public function render()
    {
        $asignaturas = asignatura::all();
        $primerTrimestre = libreta::primerTrimestreByAlumno($this->id_alumno, $this->ciclo_lectivo_id)->get();
        $segundoTrimestre = libreta::segundoTrimestreByAlumno($this->id_alumno, $this->ciclo_lectivo_id)->get();
        $tercerTrimestre = libreta::tercerTrimestreByAlumno($this->id_alumno, $this->ciclo_lectivo_id)->get();
        $diciembre = libreta::diciembreByAlumno($this->id_alumno, $this->ciclo_lectivo_id)->get();
        $febrero = libreta::febreroByAlumno($this->id_alumno, $this->ciclo_lectivo_id)->get();
        $alumno = Alumno::where('id', $this->id_alumno)->get();
        $nombre = "Inexistente";
        $curso = "No registrado";
        if(count($alumno) !== 0){
            $clase = clase::where('alumno_id', $this->id_alumno)->get();
            if(count($clase) !== 0){
                $cursos = curso::where('id', $clase[0]->curso_id)->get();
                if(count($cursos) !== 0)
                    $curso = $cursos[0]->anio .' - '. $cursos[0]->division;
            }
            $usuario = User::where('id', $alumno[0]->user_id)->get();
            $nombre = $usuario[0]->name .' '. $usuario[0]->last_name;
        }
        $ciclo_lectivo = "no iniciado";
        $ciclo = CicloLectivo::where('id', $this->ciclo_lectivo_id)->get();
        if(count($ciclo) !== 0)
            $ciclo_lectivo = CicloLectivo::where('id', $this->ciclo_lectivo_id)->get()[0]->anio;

        return view('livewire.admin.libreta-index', compact('asignaturas', 
                                                            'primerTrimestre', 
                                                            'segundoTrimestre', 
                                                            'tercerTrimestre', 
                                                            'diciembre', 
                                                            'febrero', 
                                                            'nombre', 
                                                            'curso', 
                                                            'ciclo_lectivo'));
    }
}
