@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @livewire('admin.alumnos-index')
@stop