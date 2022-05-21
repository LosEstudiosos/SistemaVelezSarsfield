<?php

namespace App\Http\Livewire;

use App\Models\Prueba;
use Livewire\Component;
use App\Models\Usuario;

class Principal extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    protected $listeners = ['render'];

    

    public function render()
    {
        $prueba = Prueba::where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('content', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction)
                        ->get();

        return view('livewire.principal', compact('prueba'));
    }

    public function order($sort){
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
    }
}
