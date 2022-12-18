<?php

namespace App\Http\Livewire\Admin;

use App\Models\alumno;
use Livewire\Component;

class Vista extends Component
{
    public function render()
    {
        $listar = alumno::all();
        return view('livewire.admin.vista', compact('listar'));
    }
}
