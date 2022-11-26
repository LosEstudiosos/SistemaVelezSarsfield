@extends('layouts.admin.template')

@section('content_header')
<h1>Actualizar a </h1>
@stop

@section('content')
@livewire('admin.cargar-index')
@stop

@section('addCSS')
<link rel="stylesheet" href="/css/style.css" defer />
@stop