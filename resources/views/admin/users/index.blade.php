@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
    <h1>Asignar roles</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop