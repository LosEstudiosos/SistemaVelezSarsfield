@extends('layouts.admin.template')

@section('content_header')
    <h1>@yield('title')</h1>
@stop

@section('content')
@php
  use App\Models\Mensajeria;
  $inbox = Mensajeria::received()->get()->count();
  $sent = Mensajeria::sended()->get()->count();
  $draft = Mensajeria::drafted()->get()->count();
  $trash = Mensajeria::trashed()->get()->count();
@endphp
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <a href="{{route('admin.mail.new')}}" class="btn btn-primary btn-block mb-3">Redactar</a>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Carpetas</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
              <a href="{{route('admin.mail.list.inbox')}}" class="nav-link">
                <i class="fas fa-inbox"></i> Recibidos
                <span class="badge bg-primary float-right">{{$inbox}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.mail.list.sent')}}" class="nav-link">
                <i class="far fa-envelope"></i> Enviados
                <span class="badge bg-purple float-right">{{$sent}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.mail.list.drafts')}}" class="nav-link">
                <i class="far fa-file-alt"></i> Borradores
                <span class="badge bg-teal float-right">{{$draft}}</span>
              </a>
            </li>
            <!--
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-filter"></i> Junk
                <span class="badge bg-warning float-right">65</span>
              </a>
            </li>-->
            <li class="nav-item">
              <a href="{{route('admin.mail.list.trash')}}" class="nav-link">
                <i class="far fa-trash-alt"></i> Papelera
                <span class="badge bg-secondary float-right">{{$trash}}</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tipos de Mensajeria</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle text-danger"></i>
                Mensaje
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle text-warning"></i> Recordatorio
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle text-primary"></i>
                Reunion
              </a>
            </li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9" id="print-content">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">@yield('title')</h3>
<!--
          <div class="card-tools">
            <div class="input-group input-group-sm">
              <input type="text" class="form-control" placeholder="Search Mail">
              <div class="input-group-append">
                <div class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </div>
              </div>
            </div>
          </div>
  -->
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        @yield('card')
      </div>
        <!-- /.card -->
    </div>
      <!-- /.col -->
  </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@stop
