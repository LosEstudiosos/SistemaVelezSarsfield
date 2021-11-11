@extends('layouts.plantilla')

@section('title' , 'Usuarios - Lista')

@section('header')
    Bienvenido a la pagina de lista de usuarios
@endsection()

@section('content')
    <ul>
        <table class="table table-striped table-secondary table-bordered table-hover table-sm">
            <thead align="center">
                <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de creacion</th>
                    <th scope="col">Fecha de modificacion</th>
                    <th scope="col">Estado de cuenta</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($listaUsuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id_usuario}}</td>
                        <td>{{$usuario->usuario}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->apellido}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->created_at}}</td>
                        <td>{{$usuario->updated_at}}</td>
                        <td>{{$usuario->id_estado_cuenta}}</td>										
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$listaUsuarios->links()}}
    </ul>
@endsection()