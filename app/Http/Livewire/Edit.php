<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prueba;

class Edit extends Component
{
    public $open = false;
    public $user;

    protected $rules = [
        'user.title' => 'required',
        'user.content' => 'required',
    ];

    public function mount(Prueba $user){
        $this->user = $user;
    }

    public function save(){
        $this->validate();

        $this->user->save();

        $this->reset(['open']);

        $this->emitTo('principal','render');
        $this->emit('alert','El post se edito con exito');
    }

    public function render()
    {
        return view('livewire.edit');
    }
}
