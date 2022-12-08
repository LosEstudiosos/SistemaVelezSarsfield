<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Recordatorio;
use App\Models\Tipo_recordatorio;
use Illuminate\Http\Request;

class LibretaController extends Controller
{
    public function index(){
        return view('admin.libreta');
    }
}
