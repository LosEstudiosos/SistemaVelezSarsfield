<?php

namespace App\Http\Livewire;

use App\Models\actas_reuniones;
use App\Models\Prueba;
use Livewire\Component;
use App\Models\Usuario;
use App\Models\User;
use Livewire\WithPagination;

class Principal extends Component
{ 
    use WithPagination;

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    
    protected $listeners = ['render'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        

        /* $Actas = actas_reuniones::all(); */
        /* $Temas = temas_acta::select('tema')->get(); */
        /* $Temas = actas_reuniones::find(1)->temas_actas()->get();  */
        /* foreach ($Actas as $Tema) {
            $Temas = actas_reuniones::find(1)->temas_actas()->get();
        } */
        /* return view('lista-actas', compact('Actas', 'Temas')); */
        /* return actas_reuniones::find(2); */

        /* $prueba = actas_reuniones::all(); */

        $users = User::where('name', 'like', '%' . $this->search . '%')
                        /* ->orWhere('cuerpo', 'like', '%' . $this->search . '%')
                        ->orWhere('acuerdo', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction) */
                        ->paginate(10); 

        return view('livewire.principal', compact('users'));
    }

 /*    public function order($sort)
    {
        if ($this->sort == $sort) {

            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    } */
}
