<?php

namespace App\Http\Livewire;

use App\Models\actas_reuniones;
use App\Models\temas_acta;
use Livewire\Component;

class Mostrar extends Component
{
    public $open = false;
    public $user;
    
    
    public function mount(actas_reuniones $user){
        $this->user = actas_reuniones::find($user->id)->temas_actas()->get();;
    }  

    public function render()
    {
        /* $User = new actas_reuniones;
        $Temas = actas_reuniones::find($User->id)->temas_actas()->get(); */
        return view('livewire.mostrar');
    }
}
