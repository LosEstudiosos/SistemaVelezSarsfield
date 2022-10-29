<?php

namespace App\Http\Livewire;

use App\Models\actas_reunione;
use App\Models\temas_acta;
use Livewire\Component;

class Mostrar extends Component
{
    public $open = false;
    public $user;
    
    
    public function mount(actas_reunione $user){
        $this->user = actas_reunione::find($user->id)->temas_actas()->get();;
    }  

    public function render()
    {
        /* $User = new actas_reunione;
        $Temas = actas_reunione::find($User->id)->temas_actas()->get(); */
        return view('livewire.mostrar');
    }
}
