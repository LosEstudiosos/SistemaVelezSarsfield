@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield Libreta')

@section('content_header')
    <h1>Libreta</h1>
@stop

@section('content')
    @livewire('admin.libreta-index', ['id_alumno' => $id_alumno, 'ciclo_lectivo_id' => $ciclo_lectivo_id])
@stop

@section('addJS')
    <script src="/js/jquery-3.5.1.js" defer></script>
    <script src="/js/libreta.js" defer></script>
@stop