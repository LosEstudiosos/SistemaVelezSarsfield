<?php

namespace App\Http\Controllers;

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
        return view('usuarios.listar');
    }
}
