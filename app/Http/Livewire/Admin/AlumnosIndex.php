<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class AlumnosIndex extends Component
{
    use WithPagination;

    public $Open = true;
    public $Buscar, $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        /* $users = Roles::where('apellido','LIKE' , '%' . $this->Buscar . '%')->paginate(10);  */   
        $users = User::role('Alumno')->get();
        return view('livewire.admin.alumnos-index', compact('users'));
    }
}
