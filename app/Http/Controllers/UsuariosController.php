<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        return view('usuarios.index');
    }

    public function registrar(){
        return view('usuarios.registrar');
    }

    public function modificar(){
        return view('usuarios.modificar');
    }
}
