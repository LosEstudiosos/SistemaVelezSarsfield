@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
    @livewire('admin.permisos-index')
@stop