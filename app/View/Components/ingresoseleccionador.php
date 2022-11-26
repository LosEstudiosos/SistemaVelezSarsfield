<?php

namespace App\View\Components;

use App\Models\Asignatura;
use App\Models\Curso;
use App\Models\Instancia;
use Illuminate\View\Component;


class ingresoseleccionador extends Component
{
    public $asignatura;
    public $select;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($select)
    {
        /* $this->asignatura = Asignatura::all(); */
        /*         if ($select=='asignatura') {
             $this->select = $select;
             $this->asignatura = asignatura::all();
        } elseif ($select=='curso') {
            $this->select = $select;
            $this->asignatura = Curso::all();
        } */
        switch ($select) {
            case 'asignatura':
                $this->select = $select;
                $this->asignatura = asignatura::all();
                break;
            case 'curso':
                $this->select = $select;
                $this->asignatura = Curso::all();
                break;
            case 'instancias':
                $this->select = $select;
                $this->asignatura = Instancia::all();
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
        return view('components.ingresoseleccionador');
    }
}
