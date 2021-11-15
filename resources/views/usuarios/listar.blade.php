@extends('layouts.plantillaGrilla')

@section('title' , 'Usuarios - Lista')

@section('header')
    Bienvenido a la pagina de lista de usuarios
@endsection()

@section('table_head')
    <tr class="table-dark">
        <th scope="col">ID</th>
        <th scope="col">Nombre de usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">F. creacion</th>
        <th scope="col">F. Ult. modificacion</th>
        <th scope="col">Estado de cuenta</th>
        <th scope="col" class="col-1">Acciones</th>       
    </tr>
@endsection()

@section('table_body')
    @foreach ($listaUsuarios as $usuario)
        <tr scope="row">
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->usuario}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->created_at->format('d-m-Y')}}</td>
            <td>{{$usuario->updated_at->format('d-m-Y')}}</td>
            @php $id = ($usuario->id_estado_cuenta) - 1 @endphp
            @switch($id)
                @case(0)                                        
                <td class="text-success text-uppercase">
                    {{$estados[$id]->estado}}
                    @break
                @case(1)
                <td class="text-danger text-uppercase">
                    {{$estados[$id]->estado}}              
                    @break
                @case(2)
                <td class="text-warning text-uppercase">
                    {{$estados[$id]->estado}}            
            @endswitch
            </td>
            <td>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-warning btn-sm" value="{{$usuario->id_usuario}}" title="Editar a {{$usuario->usuario}}">
                        <i class="fas fa-edit faa-wrench animated-hover"></i>
                    </button>
                    <button class="ms-3"></button> 
                    <button type="button" class="btn btn-danger btn-sm me-auto" value="{{$usuario->id_usuario}}" title="Eliminar a {{$usuario->usuario}}">
                        <i class="fas fa-eraser faa-passing	animated-hover"></i>
                    </button> 
                </div>
            </td>										
        </tr>
    @endforeach
@endsection()