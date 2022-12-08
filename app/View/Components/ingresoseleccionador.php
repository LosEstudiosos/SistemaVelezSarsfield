<?php

namespace App\View\Components;

use App\Models\Asignatura;
use App\Models\CicloLectivo;
use App\Models\Curso;
use App\Models\Instancia;
use Illuminate\View\Component;


class ingresoseleccionador extends Component
{
    public $asignatura;
    public $select;
    public $Datos;

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
                $this->Datos = 'asignatura';

                break;
            case 'curso':
                $this->select = $select;
                $this->asignatura = Curso::all();
                $this->Datos = 'curso';
                break;
            case 'instancias':
                $this->select = $select;
                $this->asignatura = Instancia::all();
                $this->Datos = 'instancias';
                break;
            case 'cicloLectivo':
                $this->select = $select;
                $this->asignatura = CicloLectivo::all();
                $this->Datos = 'ciclolectivo';
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
