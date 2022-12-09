<?php

namespace App\Http\Livewire\Admin;

use App\Models\asignatura;
use App\Models\libreta;
use Livewire\Component;

class LibretaIndex extends Component
{
    public $id_alumno;

    public function mount($id_alumno){
        $this->id_alumno = $id_alumno;
    }
    
    public function render()
    {
        $asignaturas = asignatura::all();
        $primerTrimestre = libreta::primerTrimestreByAlumno($this->id_alumno, 1)->get();
        $segundoTrimestre = libreta::segundoTrimestreByAlumno($this->id_alumno, 1)->get();
        $tercerTrimestre = libreta::tercerTrimestreByAlumno($this->id_alumno, 1)->get();
        return view('livewire.admin.libreta-index', compact('asignaturas', 'primerTrimestre', 'segundoTrimestre', 'tercerTrimestre'));
    }
}
