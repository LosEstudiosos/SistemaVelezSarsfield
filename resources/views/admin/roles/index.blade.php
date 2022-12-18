@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
    <h1>Asignar permisos</h1>
@stop

@section('content')
    @livewire('admin.roles-index')
@stop