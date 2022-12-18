<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class alumnos extends Component
{
    public $user, $ruta, $id, $metodo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $modificar)
    {
        $this->user = $id;
        
        switch ($modificar) {
            case 'create':
                $this->metodo = 'POST';
                $this->ruta = 'admin.alumnos.store';

                break;
            case 'edit':
                $this->metodo = 'PUT';
                $this->ruta = 'admin.alumnos.update';
                break;
            default:
                # code...
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alumnos');
    }
}
