@extends('layouts.admin.mail')

@section('title')
{{$mail[0]->titulo}}
@stop

@php
use Illuminate\Support\Facades\DB;
$listUsers = DB::table('users')
                ->select('id', 'name', 'last_name')
                ->orderBy('id')
                ->get();
$receptor = $listUsers[$mail[0]->user_receptor_id - 1]->name .' '. $listUsers[$mail[0]->user_receptor_id - 1]->last_name;
$emisor = $listUsers[$mail[0]->user_emisor_id - 1]->name .' '. $listUsers[$mail[0]->user_emisor_id - 1]->last_name;
@endphp
@section('card')
<div class="card-body">
  <div class="card-body p-0">
      <div class="mailbox-read-info">
        <h5>Asunto: {{$mail[0]->titulo}}</h5>
        <h6>Para: {{$receptor}}
          <h6>De: {{$emisor}}
          <span class="mailbox-read-time float-right">{{$mail[0]->created_at}}</span>
        </h6>
      </div>
      <!-- /.mailbox-read-info 
      <div class="mailbox-controls with-border text-center">
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
            <i class="far fa-trash-alt"></i>
          </button>
          <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
            <i class="fas fa-reply"></i>
          </button>
          <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
            <i class="fas fa-share"></i>
          </button>
        </div>
        <button type="button" class="btn btn-default btn-sm" title="Print">
          <i class="fas fa-print"></i>
        </button>
      </div>-->
      <!-- /.mailbox-controls -->
      <div class="mailbox-read-message">
        {!!$mail[0]->cuerpo!!}
      </div>
      <!-- /.mailbox-read-message -->
    </div>
  <div class="card-footer no-print">
    <div class="float-right">
    @if($mail[0]->borrador)
      <form action="{{route('admin.mail.send')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$mail[0]->id}}">
        <button type="submit" class="btn btn-primary" id="btnSend" name="btnSend"><i class="far fa-envelope"></i> Enviar</button>
      </form>
    @endif
    </div>
    <div class="float-left">
      @if(!$mail[0]->eliminado)
      <form action="{{route('admin.mail.delete')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$mail[0]->id}}">
        <button type="submit" class="btn btn-default" id="btnDelete" name="btnDelete"><i class="far fa-trash-alt"></i> Eliminar</button>
      </form>
      @endif
        <button type="button" class="btn btn-default" id="btnPrint" name="btnPrint"><i class="fas fa-print"></i> Imprimir</button>
    </div>
  </div>
</div>
@stop

@section('addJS')
    <script src="/js/print.js"></script>
    <script src="/js/jquery-print/jquery.print.js"></script>
@stop