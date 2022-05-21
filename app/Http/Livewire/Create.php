<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prueba;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $open = false;

    public $title, $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    public function save(){

        $this->validate();

        Prueba::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->reset(['open', 'title', 'content']);

        $this->emitTo('principal','render');
        $this->emit('alert','El post se creo con exito');
    }

    public function render()
    {
        return view('livewire.create');
    }
}
