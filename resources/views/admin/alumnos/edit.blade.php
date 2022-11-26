@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
<h1>Agreagar datos del alumno</h1>
@stop

@section('content')
<x-alumnos clase="bg" color="info" id="{{ $user }}" modificar="edit">
    Estudiantes
    
    <x-slot name="input">
        <x-ingresoseleccionador select="curso">
            Seleccione año/división
        </x-ingresoseleccionador>
    </x-slot>

    <x-slot name="boton">
        Guardar
    </x-slot>
</x-alumnos>
@stop