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
        /* $libreta = new libreta(); */;
        
        for ($i=0; $i < count($request->user_id); $i++) { 

        /* $alumno = alumno::find($request->user_id[$i]);
        $calificacion = $request->Notas; */

        libreta::where('alumno_id', '=', $request->user_id[$i])
                ->where('asignatura_id', '=', $request->asignatura)
                ->where('ciclo_lectivo_id', '=', $request->cicloLectivo)
                ->where('instancia_id', '=', $request->instancias)
                ->delete();
        
            # code...
        
        if($request->Notas[$i] !== '11'){
            $libreta = new libreta();
            $libreta->alumno_id = $request->user_id[$i];
            $libreta->calificacion = $request->Notas[$i];
            $libreta->asignatura_id = $request->asignatura;
            $libreta->ciclo_lectivo_id = $request->cicloLectivo;
            $libreta->instancia_id = $request->instancias;
            $libreta->save();
        }
        }
        
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
        
        
        return back();
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
