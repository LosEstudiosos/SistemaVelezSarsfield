<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function registrar(){
        return view('usuarios.registrar');
    }

    public function modificar(){
        return view('usuarios.modificar');
    }

    public function listar(){
        $listaUsuarios = Usuario::paginate();
        return view('usuarios.listar',compact('listaUsuarios'));
    }
}
