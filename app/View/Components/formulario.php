<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formulario extends Component
{
    public $clase;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clase)
    {
        $this->clase = $clase;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario');
    }
}
