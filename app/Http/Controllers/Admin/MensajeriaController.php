<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mensajeria;
use Illuminate\Http\Request;

class MensajeriaController extends Controller
{
    public function listInbox(){
        $listMensajeria = Mensajeria::received()->get();
        $titulo = 'Bandeja de Entrada';
        return view('admin.mail.list', compact('listMensajeria', 'titulo'));
    }
    
    public function listSent(){
        $listMensajeria = Mensajeria::sended()->get();
        $titulo = 'Bandeja de Salida';
        return view('admin.mail.list', compact('listMensajeria', 'titulo'));
    }
    
    public function listDraft(){
        $listMensajeria = Mensajeria::drafted()->get();
        $titulo = 'Borradores';
        return view('admin.mail.list', compact('listMensajeria', 'titulo'));
    }
    
    public function listTrash(){
        $listMensajeria = Mensajeria::trashed()->get();
        $titulo = 'Papelera';
        return view('admin.mail.list', compact('listMensajeria', 'titulo'));
    }

    public function new(){
        return view('admin.mail.new');
    }

    public function read(Request $request){
        Mensajeria::where('id',$request->id)
                    ->update(array(
                        'leido'=> 1
                    ));
        $mail = Mensajeria::where('id',$request->id)->get();
        return view('admin.mail.read', compact('mail'));
    }

    public function noted(Request $request){
        Mensajeria::where('id',$request->id)
                    ->update(array(
                        'destacado'=> !$request->noted
                    ));
        return redirect()->back();
    }

    public function save(Request $request){
        $mensaje = new Mensajeria();
        $mensaje->titulo = $request->title;
        $mensaje->cuerpo = $request->body;
        $mensaje->tipos_mensajeria_id = $request->tipo;
        $mensaje->user_receptor_id = $request->user_receptor;
        $mensaje->user_emisor_id = auth()->id();
        $mensaje->leido = 1;
        if ($request->has('btnDrafts')) {
            $mensaje->borrador = 1;
        }
        $mensaje->save();
        return redirect()->route('admin.mail.list.inbox');
    }

    public function send(Request $request){
        Mensajeria::where('id',$request->id)
                    ->update(array(
                        'eliminado'=> 0,
                        'borrador'=> 0
                    ));
        return redirect()->route('admin.mail.list.sent');
    }

    public function delete(Request $request){
        Mensajeria::where('id',$request->id)
                    ->update(array(
                        'eliminado'=> 1,
                        'borrador'=> 0
                    ));
        return redirect()->route('admin.mail.list.trash');
    }
}