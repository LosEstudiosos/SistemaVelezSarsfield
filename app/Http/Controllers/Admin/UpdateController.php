<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\alumno;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request,alumno $alumno)
    {
        return $alumno;
        $alumno->curso()->attach($request->Datos);
        return redirect()->route('admin.alumnos.edit', compact('alumno'));
    }
}
