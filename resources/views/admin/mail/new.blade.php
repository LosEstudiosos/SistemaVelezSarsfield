@extends('layouts.admin.mail')

@section('plugins.Datatables', true)
@section('plugins.BootstrapSelect', true)
@section('plugins.Summernote', true)

@section('title', 'Mensaje Nuevo')

@php
use Illuminate\Support\Facades\DB;
$listTypes = DB::table('tipos_mensajerias')
                ->select('id', 'tipo')
                ->orderBy('id')
                ->get();
$listUsers = DB::table('users')
                ->select('id', 'name', 'last_name')
                ->orderBy('name')
                ->get();
$userID = auth()->id();
//$userName = $listUsers[$userID - 1]->name . $listUsers[$userID - 1]->last_name;
@endphp

@section('card')
<form action="{{route('admin.mail.save')}}" method="POST" id="mensajeriaForm">
@csrf
<div class="card-body">
  <div class="d-flex flex-row-reverse mb-2">
    <select class="form-select" aria-hidden="true" id="select2-dropdown-type" name="tipo" required="true" >
      <option value="" selected disabled hidden>Seleccione el tipo</option>
        @foreach ($listTypes as $type)
          <option value="{{$type->id}}">{{$type->tipo}}</option>                  
        @endforeach
    </select>
    <div class="input-group-prepend">
      <label class="input-group-text" for="select2-dropdown-type">Tipo de Mensajeria:</label>
    </div>
  </div>
  <div class="form-group input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="select2-dropdown-users">Para:</label>
    </div>
    <select class="form-select custom-select" id="select2-dropdown-users" name="user_receptor[]" multiple required="true" >
      <option value="" disabled hidden>Seleccione el destinatario</option>
        @foreach ($listUsers as $user)
          <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>                  
        @endforeach
    </select>
    <!--<input class="form-control" placeholder="Para:">-->
  </div>
  <hr>
  <div class="form-group">
    <input class="form-control" placeholder="Asunto:" name="title">
  </div>
  <div class="form-group">
      <textarea id="compose-textarea" class="form-control" name="body" style="height: 300px"></textarea>
  </div>
</div>
<div class="card-footer">
  <div class="float-right">
    <button type="submit" class="btn btn-default" id="btnDrafts" name="btnDrafts"><i class="fas fa-pencil-alt"></i> Guardar como borrador</button>
    <button type="submit" class="btn btn-primary" id="btnSave" name="btnSave"><i class="far fa-envelope"></i> Enviar</button>
  </div>
  <button type="submit" class="btn btn-default" id="btnCancel" name="btnCancel"><i class="fas fa-times"></i>Descartar</button>
</div>
</form>


@stop

@section('addCSS')
  <!--<link rel="stylesheet" href="/css/summernote/summernote-bs5.min.css"> 
  <link rel="stylesheet" href="/css/select2/select2.css"> 
  <link rel="stylesheet" href="/css/select2/select2-bootstrap-5-theme.css">  --> 
  <link rel="stylesheet" href="/css/compose.css"> 
@stop

@section('addJS')
  <!--<script src="/js/summernote/summernote-bs5.min.js"></script>
  <script src="/js/select2/select2.js"></script>
  <script src="/js/select2/i18n/es.js"></script>
  <script src="/js/summernote/lang/summernote-es-ES.js"></script>-->
  <script src="/js/compose.js" defer></script>
@stop