<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Alumno extends Component
{
    public $Fecha_Inscrpcion;

    public function mount(User $lista){
        $this->Fecha_Inscrpcion = User::find($lista->id)->alumno;
    }

    public function render()
    {
        return view('livewire.alumno');
    }
}
