<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarcadorMensajerias;
use App\Models\Mensajeria;
use App\Models\UsersMensajerias;
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
        //return $listMensajeria;
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
        UsersMensajerias::where('mensajeria_id', $request->id)
                    ->where('user_id', auth()->id())
                    ->update(array(
                        'leido'=> 1
                    ));
        $mail = Mensajeria::where('id', $request->id)->get();
        return view('admin.mail.read', compact('mail'));
    }

    public function noted(Request $request){
        UsersMensajerias::where('mensajeria_id', $request->id)
                    ->where('user_id', auth()->id())
                    ->update(array(
                        'destacado'=> !$request->noted
                    ));
        return redirect()->back();
    }

    public function save(Request $request){
        $guardarBorrador = $request->has('btnDrafts');
        $mensaje = new Mensajeria();
        $mensaje->titulo = $request->title;
        $mensaje->cuerpo = $request->body;
        $mensaje->tipos_mensajeria_id = $request->tipo;
        $mensaje->user_autor_id = auth()->id();
        $mensaje->save();
        $mensajeUserEmisor = new UsersMensajerias();
        $mensajeUserEmisor->user_id = auth()->id();
        $mensajeUserEmisor->marcador_id = MarcadorMensajerias::where('posicion', '=', 'Bandeja de Salida')->get()[0]->id;
        $mensajeUserEmisor->leido = 1;
        $mensajeUserEmisor->mensajeria_id = $mensaje->id;
        if ($guardarBorrador) {
            $mensajeUserEmisor->marcador_id = MarcadorMensajerias::where('posicion', '=', 'Borradores')->get()[0]->id;
            //$mensajeUserEmisor->save();
        }
        $mensajeUserEmisor->save();
        foreach ($request->user_receptor as $userID){
            $mensajeUserReceptor = new UsersMensajerias();
            $mensajeUserReceptor->user_id = $userID;
            $mensajeUserReceptor->marcador_id = MarcadorMensajerias::where('posicion', '=', 'Bandeja de Entrada')->get()[0]->id;
            if ($guardarBorrador) 
                $mensajeUserReceptor->marcador_id = MarcadorMensajerias::where('posicion', '=', 'Borradores Receptor')->get()[0]->id;
            $mensajeUserReceptor->mensajeria_id = $mensaje->id;
            $mensajeUserReceptor->save();
        }
        if ($guardarBorrador){
            return redirect()->route('admin.mail.list.drafts');
        }
        return redirect()->route('admin.mail.list.inbox');
    }

    public function send(Request $request){
        UsersMensajerias::where('mensajeria_id', $request->id)
                        ->where('user_id', auth()->id())
                        ->update(array(
                            'marcador_id'=> MarcadorMensajerias::where('posicion', '=', 'Bandeja de Salida')->get()[0]->id
                        ));
        //$datos = UsersMensajerias::where('mensajeria_id', $request->id);
        UsersMensajerias::where('mensajeria_id', $request->id)
                        ->where('user_id', '<>', auth()->id())
                        ->update(array(
                            'marcador_id'=> MarcadorMensajerias::where('posicion', '=', 'Bandeja de Entrada')->get()[0]->id
                        ));
        return redirect()->route('admin.mail.list.sent');
    }

    public function delete(Request $request){
        UsersMensajerias::where('mensajeria_id', $request->id)
                        ->where('user_id', auth()->id())
                        ->update(array(
                            'marcador_id'=> MarcadorMensajerias::where('posicion', '=', 'Papelera')->get()[0]->id
                        ));
        return redirect()->route('admin.mail.list.trash');
    }

    public function checkBorradores(){
        $listMensajeria = Mensajeria::all();
        foreach ($listMensajeria as $mail){
            $list2 = UsersMensajerias::all();
            foreach ($list2 as $u){
                if($u->mensajeria_id === $mail->id and $u->marcador_id === 3){
                    if($u->user_id !== $mail->user_autor_id and $u->user_id !== NULL){
                        Mensajeria::where('id', $mail->id)
                        ->update(array(
                            'user_autor_id'=> $u->user_id
                        ));
                    }
                }
            }
        }
        return 'Check de Borradores finalizado con Exito';

    }
    
    public function checkEnviados(){
        $listMensajeria = Mensajeria::all();
        foreach ($listMensajeria as $mail){
            $list2 = UsersMensajerias::all();
            foreach ($list2 as $u){
                if($u->mensajeria_id === $mail->id and $u->marcador_id === 2){
                    if($u->user_id !== $mail->user_autor_id and $u->user_id !== NULL){
                        UsersMensajerias::where('id', $u->id)
                        ->update(array(
                            'user_id'=> $mail->user_autor_id
                        ));
                    }
                }
            }
        }
        return 'Check de Enviados finalizado con Exito';

    }
}