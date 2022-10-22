<?php

namespace App\View\Components;

use App\Models\alumno;
use App\Models\asignatura;
use App\Models\User;
use Illuminate\View\Component;

class lista extends Component
{
    public $color, $clase, $listar, $tipo;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $clase, $lista)
    {
        $this->color = $color;
        $this->clase = $clase;
        if ($lista=='calificaciones') {
            $this->tipo = 'calificaciones';
            $this->listar = asignatura::all();
        } else {
            $this->tipo = 'alumnos';
            $this->listar = User::all();
        }
        $this->listar = User::all();
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lista');
    }
}
