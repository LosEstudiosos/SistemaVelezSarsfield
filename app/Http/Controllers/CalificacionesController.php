<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalificacionesController extends Controller
{
    public function calificaciones2($id)
    {
        $User = User::find($id);
        $Alumno = alumno::find($id);
        $Lista = 'calificaciones';
        return view('calificaciones2', compact('User', 'Alumno', 'Lista'));
    }

    public function alumnos()
    {
        $Lista = 'alumnos';
        
        return view('alumnos', compact('Lista'));
    }

    public function cargaNotas(){
        $user = Auth::id();
        $notas = user::find($user); 
            return view('cargaNotas', compact('notas'));  
    }
}
