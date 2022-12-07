<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notas extends Component
{
    public $open = true;
    public $user;

    public function mount($user){
        $this->user = $user;

    }

    public function render()
    {
        return view('livewire.notas');
    }
}
