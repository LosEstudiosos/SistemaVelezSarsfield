<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\Prueba;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table(){
        $prueba = alumno::find(1)->cursos;
        
        return $prueba;
    }
}
