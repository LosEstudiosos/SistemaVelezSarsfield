@extends('layouts.admin.template')

@section('title', 'Velez Sarsfield')

@section('content_header')
<h1>Asignar permisos</h1>
@stop

@section('content')

@if (session('info'))
<div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
    {{ session('info') }}
</div>
@endif
<div class="card">

    <div class="card-body {{-- bg-white overflow-hidden shadow-xl sm:rounded-lg --}}">
        <p class="h5">Nombre</p>
        <p class="form-control {{-- border border-b-8 border-gray-200 --}}">{{ $role->name }}</p>

        <h2 class="h5">Listado de permisos</h2>
        <div class=" px-6 py-3  items-center">


            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            @foreach ($Permisos as $permiso)
            <div>
                
                <label>
                    {!! Form::checkbox('permisos[]', $permiso->id, $role->hasPermissionTo($permiso->name), ['class' =>
                    'mr-1']) !!}
                    {{ $permiso->name }}
                </label>
            </div>
            @endforeach
            {!! Form::submit('Guardar', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4
            rounded-full mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop