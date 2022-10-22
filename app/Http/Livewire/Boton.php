<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Boton extends Component
{
    public $boton;
    
    public function mount(User $boton){
        $this->boton = User::find($boton->id);
    }

    public function render()
    {
        return view('livewire.boton');
    }
}
