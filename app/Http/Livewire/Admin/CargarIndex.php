<?php

namespace App\Http\Livewire\Admin;

use App\Models\alumno;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class CargarIndex extends Component
{
    public $prueba1, $prueba2, $search = '', $search1 = '';

    public function mount(){
        
    }

    public function render()
    {
        $this->prueba1 = $this->search;
        $this->prueba2 = $this->search1;
        $listar = alumno::all();
        return view('livewire.admin.cargar-index', compact('listar'));
    }
}
