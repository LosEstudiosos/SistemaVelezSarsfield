@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield Libreta')

@section('content_header')
    <h1>Libreta</h1>
@stop

@section('content')
    @livewire('admin.libreta-index', ['id_alumno' => $id_alumno])
@stop

<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
@section('addCSS')

@stop

@section('addJS')

@stop