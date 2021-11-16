<?php

namespace App\Http\Controllers;

use App\Models\Estado_Cuenta;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function registrar(){
        return view('usuarios.registrar');
    }

    public function modificar($id){
        $usuario = Usuario::where('id',$id)->get();
        return view('usuarios.modificar',compact('usuario'));
    }

    public function listar(){
        $listaUsuarios = Usuario::all();
        $estados = Estado_Cuenta::all();
        return view('usuarios.listar',compact('listaUsuarios','estados'));
    }

    public function almacenar(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;
        $usuario->id_estado_cuenta = 1;
        $usuario->save();
        return $this->listar();
    }

    public function actualizar(Request $request){
        Usuario::where('id',$request->id)
                    ->update(array(
                        'nombre'=>$request->nombre,
                        'apellido'=>$request->apellido,
                        'email'=>$request->email,
                        'usuario'=>$request->usuario,
                        'password'=>$request->password,
                    ));
        return $this->listar();
    }

    public function altabaja(Request $request){
        if($request->id_estado_cuenta == 1)
            Usuario::where('id',$request->id)
                        ->update(array(
                            'id_estado_cuenta'=>2
                        ));
        else
            Usuario::where('id',$request->id)
                        ->update(array(
                            'id_estado_cuenta'=>1
                        ));
        return $this->listar();
    }

    public function borrar(Request $request){
        Usuario::where('id',$request->id)->delete();
        return $this->listar();
    }
}
