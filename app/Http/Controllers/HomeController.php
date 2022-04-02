<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }

    public function home(){
        $credenciales = request()->only('usuario','password');
        //$usuarioActual = Usuario::where('usuario',request('usuario'))->get();
        $usuarioActual = Usuario::where('usuario',request('usuario'))
                                ->where('password',request('password'))
                                ->where('id_estado_cuenta',1)
                                ->get();
        if(empty($usuarioActual[0]))
            return view('login');
        else{
            session_start();
            $_SESSION['nombre'] = $usuarioActual[0]->nombre;
            $_SESSION['apellido'] = $usuarioActual[0]->apellido;
            $_SESSION['email'] = $usuarioActual[0]->email;
            $_SESSION['usuario'] = $usuarioActual[0]->usuario;
            //$_SESSION['_token'] = $usuarioActual[0]->nombre;

            return view('home');
        }
    }
}
