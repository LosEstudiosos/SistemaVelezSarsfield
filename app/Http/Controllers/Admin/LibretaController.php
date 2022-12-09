<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;

class LibretaController extends Controller
{
    public function index($id_alumno = null){
        if(empty($id_alumno)){
            $id_alumno = Alumno::where('user_id', auth()->id())->get()[0]->id;
        }else{
            $id_alumno = Alumno::where('user_id', $id_alumno)->get()[0]->id;
        }
        return view('admin.libreta', compact('id_alumno'));
    }
}
