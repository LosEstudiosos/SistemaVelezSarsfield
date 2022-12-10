<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actas_reuniones;
use App\Models\alumno;
use App\Models\asignatura;
use App\Models\temas_acta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ActasController extends Controller
{
  public function index()
  {


    $Temas = temas_acta::all();
    $user = User::all();


    return view('actas', compact('Temas','user'));
  }

  public function list()
  {
    $Actas = actas_reuniones::all(); 
    /* $Temas = temas_acta::select('tema')->get(); */
     /* $Temas = actas_reuniones::find(1)->temas_actas()->get();  */
    return view('lista-actas', compact('Actas'));
     /* return actas_reuniones::find(2); */
     
  }

  public function store(Request $request)
  {
    /*  return $request->all();  */
    $Actas = new actas_reuniones();

    $Actas->fecha_creacion = $request->fecha;
    $Actas->cuerpo = json_encode($request->Participantes);
    $Actas->acuerdo = $request->Acuerdo;

    $Actas->save();

    $Temas = temas_acta::find($request->temas);

    /* $Temas->tema = $request->temas;  */

    /* $Temas->save(); */

    $Actas->temas_actas()->attach($Temas);

    $User = Auth::id();

    $Actas->Users()->attach($User);

    return redirect()->route('actas');
  }

  public function calificaciones(){
    $UserId = Auth::id();
    $User = User::find($UserId);
    $Alumno = alumno::find($UserId);
    $Estado = 'asignatura';
    return view('calificaciones', compact('Estado', 'User', 'Alumno'));
  }

  
}
