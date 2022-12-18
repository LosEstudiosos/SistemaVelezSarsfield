@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
<h1>Agreagar datos del alumno</h1>
@stop

@section('content')
<x-alumnos clase="bg" color="info" id="{{ $user }}" modificar="create">
    Estudiantes

    <x-slot name="input">
        <div class="col-12 mt-3 form-floating">
            <input id="2" class="form-control" type="date" name="fecha" />
            <label for="2" class="ms-2">Fecha de inscripción</label>
        </div>
    </x-slot>

    <x-slot name="boton">
        Guardar
    </x-slot>
</x-alumnos>
@stop