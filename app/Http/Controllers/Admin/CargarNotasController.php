<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\alumno;
use App\Models\libreta;
use App\Models\User;
use Illuminate\Http\Request;


class CargarNotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cargarNotas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $libreta = new libreta(); *///return $request;
        $alumno = alumno::find($request->id);
        $calificacion = $request->Notas;

        $libreta = new libreta();
        $libreta->alumno_id = $request->id;
        $libreta->calificacion = $request->Notas;
        $libreta->asignatura_id = $request->asignatura;
        $libreta->ciclo_lectivo_id = $request->ciclolectivo;
        $libreta->instancia_id = $request->instancias;

        $libreta->save();
        
        
        /* $libreta->calificacion = $request->Notas;
        $libreta->save(); */
        /* $alumno->Asignaturas()->attach($request->Datos, ['calificacion' => $calificacion]); 
        $alumno->CicloLectivo()->sync([$request->cicloLectivo => ['calificacion' => $calificacion]]);
        $alumno->Asignaturas()->sync([$request->asignatura => ['calificacion' => $calificacion]]);
        */

        
        /* $alumno = alumno::find($request->id);
        $calificacion = $request->Notas;
        $cicloLectivo = $request->cicloLectivo;
        $instancia = $request->instancias;
        return $request;
        $alumno->Asignaturas()->attach([
            1 => ['calificacion' => $calificacion, 'ciclo_lectivo_id' => $cicloLectivo, 'instancia_id' => $instancia],
        ]); */
        
        
        return redirect()->route('admin.cargarNotas.vista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
