<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\alumno;
use App\Models\libreta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CargaNotasController extends Controller
{
    public function cargaNotas(){
        $user = Auth::id();
        $notas = User::find($user); 
            return view('admin.cargarNotas.index', compact('notas'));  
    }

    public function store(Request $request){
        $libreta = new libreta();
        $alumno = alumno::find(1);
        $calificacion = $request->Notas;
        /* $libreta->calificacion = $request->Notas;
        $libreta->save(); */
        $alumno->Asignaturas()->attach($request->Datos, ['calificacion' => $calificacion]);
        return redirect()->route('admin.cargarNotas.vista');
    }

    public function verNotas(){
        /* $user = Auth::id();
        $notas = User::find($user);  */
        $listar = alumno::all();
            return view('admin.cargarNotas.vista' , compact('listar') );  
    }
}
