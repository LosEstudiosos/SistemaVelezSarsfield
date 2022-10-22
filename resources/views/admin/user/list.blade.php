@extends('layouts.admin.grid')

@section('title', 'users Velez Sarsfield')

@section('content_header')
    <h1>Lista de users en Velez Sarsfield</h1>
@stop

@section('table_head')
    <tr class="table-dark">
        <th scope="col">ID</th>
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
    @foreach ($listUsers as $user)
        <tr scope="row">
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->format('d-m-Y')}}</td>
            <td>{{$user->updated_at->format('d-m-Y')}}</td>
            @php $id = ($user->estado_cuenta_id) - 1 @endphp
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
                    <form class="bg-secondary b border border-5" action="{{route('admin.user.edit',$user->id)}}"  method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm" title="Modificar a [{{strtoupper($user->email)}}]">
                            <i class="fas fa-edit faa-wrench animated-hover"></i>
                        </button>
                    </form>
                    <button class="ms-3"></button> 
                    <form class="bg-secondary b border border-5" action="{{route('admin.user.discharge')}}"  method="POST">
                        @csrf
                        <input type="hidden" name="estado_cuenta_id" value="{{$user->estado_cuenta_id}}">
                        @switch($user->estado_cuenta_id)
                            @case(1)
                                <button type="submit" name="id" class="btn btn-danger btn-sm me-auto" value="{{$user->id}}" title="Dar de baja a [{{strtoupper($user->email)}}]">
                                    @break
                            @default
                                <button type="submit" name="id" class="btn btn-success btn-sm me-auto" value="{{$user->id}}" title="Dar de alta a [{{strtoupper($user->email)}}]">
                                    @break
                        @endswitch
                            <i class="fas fa-user-times faa-passing	animated-hover"></i>
                        </button>
                    </form>
                    <button class="ms-3"></button> 
                    <!-- Button trigger modal -->
                    <form class="bg-secondary b border border-5">
                        <button type="button" class="btn btn-dark btn-sm me-auto" title="Eliminar a [{{strtoupper($user->email)}}]" data-bs-toggle="modal" data-bs-target="#modal{{$user->id}}">
                            <i class="fas fa-bomb faa-burst faa-fast animated-hover"></i>
                        </button>
                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$user->id}}" tabindex="-1" aria-labelledby="ModalLabel{{$user->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel{{$user->id}}">Confirmar eliminación del user: <b>{{$user->email}}</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Desea eliminar a <b>{{$user->nombre}} {{$user->last_name}}</b>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                    <form class="bg-secondary b border border-5" action="{{route('admin.user.delete')}}"  method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" name="id" value="{{$user->id}}">Eliminar</button>
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

@section('addCSS')
    <link rel="stylesheet" href="/css/style.css" defer/>
@stop