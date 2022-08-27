<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estado_Cuenta;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
/*
Route::get('usuarios/registrar', [UsersController::class, 'new'])->name('admin.user.new');
Route::post('usuarios/guardar', [UsersController::class, 'save'])->name('admin.user.save');
Route::post('usuarios/modificar/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
Route::post('usuarios/actualizar', [UsersController::class, 'update'])->name('admin.user.update');
Route::post('usuarios', [UsersController::class, 'discharge'])->name('admin.user.discharge');*/
{
    public function list(){
        $listUsuarios = Usuario::all();
        $listEstados = Estado_Cuenta::all();
        return view('admin.user.list', compact('listUsuarios','listEstados'));
    }

    public function new(){
        return view('admin.user.new');
    }
    
    public function save(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;
        $usuario->id_estado_cuenta = 1;
        $usuario->save();
        return $this->list();
    }

    public function edit($id){
        $usuario = Usuario::where('id',$id)->get();
        return view('admin.user.edit',compact('usuario'));
    }

    public function update(Request $request){
        Usuario::where('id',$request->id)
                    ->update(array(
                        'nombre'=>$request->nombre,
                        'apellido'=>$request->apellido,
                        'email'=>$request->email,
                        'usuario'=>$request->usuario,
                        'password'=>$request->password,
                    ));
        return $this->list();
    }

    public function discharge(Request $request){
        $newEstado = 1;
        if($request->id_estado_cuenta == 1){
            $newEstado = 2;
        }
        Usuario::where('id',$request->id)
                    ->update(array(
                        'id_estado_cuenta'=> $newEstado
                    ));
        return $this->list();
    }

    public function delete(Request $request){
        Usuario::where('id',$request->id)->delete();
        return $this->list();
    }
}
