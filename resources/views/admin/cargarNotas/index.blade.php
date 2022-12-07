@extends('layouts.admin.template')

@section('content_header')
<h1> Carga de notas </h1>
@stop

@section('content')
@livewire('admin.cargar-index')
@stop

@section('addCSS')
<link rel="stylesheet" href="/css/style.css" defer />
@stop