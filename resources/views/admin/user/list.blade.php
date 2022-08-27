@extends('layouts.admin.grid')

@section('title', 'Usuarios Velez Sarsfield')

@section('content_header')
    <h1>Lista de Usuarios en Velez Sarsfield</h1>
@stop

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
    @foreach ($listUsuarios as $usuario)
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
                    {{$listEstados[$id]->estado}}
                    @break
                @case(1)
                <td class="text-danger text-uppercase">
                    {{$listEstados[$id]->estado}}              
                    @break
                @case(2)
                <td class="text-warning text-uppercase">
                    {{$listEstados[$id]->estado}}
                    @break           
            @endswitch
            </td>
            <td>
                <div class="btn-group" role="group">
                    <form class="bg-secondary b border border-5" action="{{route('admin.user.edit',$usuario->id)}}"  method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm" title="Modificar a [{{strtoupper($usuario->usuario)}}]">
                            <i class="fas fa-edit faa-wrench animated-hover"></i>
                        </button>
                    </form>
                    <button class="ms-3"></button> 
                    <form class="bg-secondary b border border-5" action="{{route('admin.user.discharge')}}"  method="POST">
                        @csrf
                        <input type="hidden" name="id_estado_cuenta" value="{{$usuario->id_estado_cuenta}}">
                        @switch($usuario->id_estado_cuenta)
                            @case(1)
                                <button type="submit" name="id" class="btn btn-danger btn-sm me-auto" value="{{$usuario->id}}" title="Dar de baja a [{{strtoupper($usuario->usuario)}}]">
                                    @break
                            @default
                                <button type="submit" name="id" class="btn btn-success btn-sm me-auto" value="{{$usuario->id}}" title="Dar de alta a [{{strtoupper($usuario->usuario)}}]">
                                    @break
                        @endswitch
                            <i class="fas fa-user-times faa-passing	animated-hover"></i>
                        </button>
                    </form>
                    <button class="ms-3"></button> 
                    <!-- Button trigger modal -->
                    <form class="bg-secondary b border border-5">
                        <button type="button" class="btn btn-dark btn-sm me-auto" title="Eliminar a [{{strtoupper($usuario->usuario)}}]" data-bs-toggle="modal" data-bs-target="#modal{{$usuario->id}}">
                            <i class="fas fa-bomb faa-burst faa-fast animated-hover"></i>
                        </button>
                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$usuario->id}}" tabindex="-1" aria-labelledby="ModalLabel{{$usuario->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel{{$usuario->id}}">Confirmar eliminación del usuario: <b>{{$usuario->usuario}}</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Desea eliminar a <b>{{$usuario->nombre}} {{$usuario->apellido}}</b>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                    <form class="bg-secondary b border border-5" action="{{route('admin.user.delete')}}"  method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" name="id" value="{{$usuario->id}}">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>										
        </tr>
    @endforeach
@endsection()