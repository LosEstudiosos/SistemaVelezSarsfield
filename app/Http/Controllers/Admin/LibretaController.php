<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\CicloLectivo;
use Illuminate\Http\Request;

class LibretaController extends Controller
{
    public function index($id_alumno = null, $ciclo_lectivo_id = null){
        if(empty($id_alumno)){
            $alumno = Alumno::where('user_id', auth()->id())->get();
        }else{
            $alumno = Alumno::where('user_id', $id_alumno)->get();
        }
        if(count($alumno) !== 0){
            $id_alumno = $alumno[0]->id;
        }
        if(empty($ciclo_lectivo_id)){
            $ciclo_lectivo = now()->year;
            if(now()->month === 1 || now()->month === 2)
                $ciclo_lectivo--;
            $ciclo_lectivo_id = CicloLectivo::where('anio', $ciclo_lectivo)->get()[0]->id;

        }
        return view('admin.libreta')->with(compact('id_alumno', 'ciclo_lectivo_id'));}
}
