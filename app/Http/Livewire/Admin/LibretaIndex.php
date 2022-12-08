<?php

namespace App\Http\Livewire\Admin;

use App\Models\asignatura;
use Livewire\Component;

class LibretaIndex extends Component
{
    public function render()
    {
        $asignaturas = asignatura::all();
        return view('livewire.admin.libreta-index',compact('asignaturas'));
    }
}
