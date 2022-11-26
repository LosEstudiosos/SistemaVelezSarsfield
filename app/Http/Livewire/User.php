<?php

namespace App\Http\Livewire;

use App\Models\User as Roles; 
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class User extends Component
{  
    use WithPagination;

    public $Buscar;

    public function updatingBuscar(){
        $this->resetPage();
    }

    public function render(){

        /* $users = Roles::where('apellido','LIKE' , '%' . $this->Buscar . '%')->paginate(10);  */   
        $users = Roles::paginate(10);                //Roles se extiende de user para no generar problemas con el controller con el mismo nombre

        return view('livewire.user', compact('users'));
    }
}
