@extends('layouts.admin.template')
{{-- @extends('adminlte::page', ['iFrameEnabled' => true]) --}}
@section('title', 'Velez Sarsfield')

@section('content_header')
    <h1>Proyecto: Campus Virtual de la Escuela secundaria “Vélez Sarsfield”</h1>
@stop

@section('content')

      <ul class="list-group">
        <h1>Profesores</h1>
        <li class="list-group-item">Luis Magariños</li>
        <li class="list-group-item">Nelson Benaventana</li>
        <li class="list-group-item">Cristina Rodriguez</li>
      </ul>
      <hr class="border border-primary border-3 opacity-75">
      <ul class="list-group">
        <li class="list-group-item active">Integrantes</li>
        <li class="list-group-item">Canet José Francisco</li>
        <li class="list-group-item">Centurión Sebastián Ignacio</li>
        <li class="list-group-item">Lapalma Santino Alexander</li>
        <li class="list-group-item">Rodríguez Federico José</li>
      </ul>
    <!--
    <div class="small-box bg-gradient-success">
        <div class="inner">
          <h3>44</h3>
          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
  -->
@stop
