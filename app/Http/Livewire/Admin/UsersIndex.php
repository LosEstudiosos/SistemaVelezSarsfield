<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User as Roles; 
use Livewire\WithPagination;


class UsersIndex extends Component
{
    use WithPagination;

    public $Buscar, $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        /* $users = Roles::where('apellido','LIKE' , '%' . $this->Buscar . '%')->paginate(10);  */   
        $users = Roles::where('name', 'like', '%' . $this->search . '%')                                 //Roles se extiende de user para no generar problemas con el controller con el mismo nombre+
                        /* ->orWhere('cuerpo', 'like', '%' . $this->search . '%')
                        ->orWhere('acuerdo', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction) */
                        ->paginate(9);               

        return view('livewire.admin.users-index' , compact('users'));
    }
}
