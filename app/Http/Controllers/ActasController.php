<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actas_reunione;

class ActasController extends Controller
{
    public function store(Request $request){
       /*  return $request->all(); */
        $Actas = new actas_reunione();

        $Actas->fecha_creacion = $request->fecha;
        $Actas->cuerpo = $request->Participantes;
        $Actas->acuerdo = $request->Acuerdo;

        $Actas->save();

        return redirect()->route('actas');
    }
}
