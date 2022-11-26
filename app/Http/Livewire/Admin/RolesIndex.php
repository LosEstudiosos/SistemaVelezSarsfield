<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;


class RolesIndex extends Component
{
    use WithPagination;

    public $Buscar, $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $roles = Role::where('name', 'like', '%' . $this->search . '%')                                 //Roles se extiende de user para no generar problemas con el controller con el mismo nombre+
                        /* ->orWhere('cuerpo', 'like', '%' . $this->search . '%')
                        ->orWhere('acuerdo', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction) */
                        ->paginate(9);

        return view('livewire.admin.roles-index', compact('roles'));
    }
}
