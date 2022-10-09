@extends('layouts.admin.mail')

@section('plugins.Datatables', true)

@section('title')
{{$titulo}}
@stop

@section('card')
<div class="card-body">
  <div class="mailbox-controls">
    <div class="btn-group">
      <button type="button" class="btn btn-default btn-sm" id="borrar">
        <i class="far fa-trash-alt"></i>
      </button>
      <!--
      <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-reply"></i>
      </button>
      <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-share"></i>
      </button>-->
      <!-- /.btn-group -->
      <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-sync-alt"></i>
      </button>
    </div>
  <div class="table-responsive mailbox-messages">
    <table class="table table-hover table-striped" id="mails" style="width:100%">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
      </tr>
      </thead>
      <tbody>
      @foreach ($listMensajeria as $mensaje)
        <tr>
          <td>
            {{$mensaje->id}}"
          </td>
          <td>
          @if ($mensaje->leido === 1)
            <i class="fas fa-check-circle text-success"></i>
          @endif
          </td>
          <td class="mailbox-star">
            <form action="{{route('admin.mail.noted')}}" method="POST">
              @csrf
              <button type="submit">
                <input type="hidden" name="id" value="{{$mensaje->id}}">
                <input type="hidden" name="noted" value="{{$mensaje->destacado}}">
                <i class="fas fa-star @if ($mensaje->destacado === 1) text-warning @else text-secondary @endif"></i>
              </button>
            </form>
          </td>
          @php
            $emisor = DB::table('users')
              ->select('name')->where('id', $mensaje->user_emisor_id)
              ->get();
          @endphp 
          <td class="mailbox-name"><a href="{{route('admin.mail.read', $mensaje->id)}}">{{$emisor[0]->name}}</a></td>
          <td class="mailbox-subject"><b>{{$mensaje->titulo}}</b></td>
          <td class="mailbox-date">{{$mensaje->fecha_edicion}}</td>
        </tr>
      @endforeach
      <!--
      <tr>
        <td>
          <div class="icheck-primary">
            <input type="checkbox" value="" id="check2">
            <label for="check2"></label>
          </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">28 mins ago</td>
      </tr>
      <tr>
        <td>
          <div class="icheck-primary">
            <input type="checkbox" value="" id="check3">
            <label for="check3"></label>
          </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">11 hours ago</td>
      </tr>-->
      </tbody>
    </table>
    <!-- /.table -->
    
  </div>
</div>
<!-- /.mail-box-messages -->
@stop

@section('addCSS')
    <link rel="stylesheet" href="/css/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/css/mail.css">   
@stop

@section('addJS')
    <script src="/js/fullcalendar/main.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/mail.js" defer></script>    
@stop