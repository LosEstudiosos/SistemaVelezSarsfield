<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use App\Models\Tipo_recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    public function index(){
        $recordatorio = Tipo_recordatorio::all();
        return view('recordatorio.index',compact('recordatorio'));
    }

    public function show(Recordatorio $Recordatorio){
        $Recordatorio = Recordatorio::all();
        return response()->json($Recordatorio);
    }

    public function edit($id){
        $Recordatorio = Recordatorio::find($id);
        return response()->json($Recordatorio);
    }

    public function destroy($id){
        $Recordatorio = Recordatorio::find($id)->delete();
        return response()->json($Recordatorio);
    }

    public function update(Request $request){
        $recordatorio = Recordatorio::find($request->id);
        $recordatorio->title = $request->titulo;
        $recordatorio->descripcion = $request->descripcion;
        $recordatorio->start = $request->start;
        //$recordatorio->end = $request->end;
        // si no sumo este tiempo me toma hora 00 y no me incluye el dia al pintar el calendario
        $NuevaFecha = strtotime ( '+23 hour' , strtotime ($request->end) ) ; 
        $NuevaFecha = strtotime ( '+59 minute' , $NuevaFecha ) ; 
        $NuevaFecha = strtotime ( '+59 second' , $NuevaFecha ) ; 
        $NuevaFecha = date ( 'Y-m-d H:i:s' , $NuevaFecha);
        $recordatorio->end = $NuevaFecha;
        // *******************************************************************
        $recordatorio->tipo_recordatorio_id = $request->tipo_recordatorio_id;
        $recordatorio->user_id = 1;//auth()->id();

        $recordatorio->update();
        return response()->json($recordatorio);
    }

    /*
    public function update(Request $request,Recordatorio $Recordatorio){
        $Recordatorio->update($request->all());
        return response()->json($Recordatorio);
    }*/
    

    public function store(Request $request){
        /*  return $request->all(); */
        $recordatorio = new Recordatorio();

        $recordatorio->title = $request->titulo;
        $recordatorio->descripcion = $request->descripcion;
        $recordatorio->start = $request->start;
        //$recordatorio->end = $request->end;
        // si no sumo este tiempo me toma hora 00 y no me incluye el dia al pintar el calendario
        $NuevaFecha = strtotime ( '+23 hour' , strtotime ($request->end) ) ; 
        $NuevaFecha = strtotime ( '+59 minute' , $NuevaFecha ) ; 
        $NuevaFecha = strtotime ( '+59 second' , $NuevaFecha ) ; 
        $NuevaFecha = date ( 'Y-m-d H:i:s' , $NuevaFecha);
        $recordatorio->end = $NuevaFecha;
        // *******************************************************************
        $recordatorio->tipo_recordatorio_id = $request->tipo_recordatorio_id;
        $recordatorio->user_id = 1;//auth()->id();

        $recordatorio->save();

        return redirect()->route('recordatorios');
    }
}
