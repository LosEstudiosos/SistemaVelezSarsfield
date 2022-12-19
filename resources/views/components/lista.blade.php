<div>
    @extends('layouts.plantillaGrilla')

    @section('title', 'Usuarios - Lista')

    @section('header')
        {{ $slot }}
    @endsection()

    @section('body')
        {{-- <form action="{{ route('usuarios.registrar') }}" method="GET">
            <div class="mb-3 col-12 d-flex justify-content-left">
                <button type="submit" class="btn btn-lg bt-r btn-primary animated-hover faa-parent">Nuevo usuario <i
                        class="fas fa-user-plus faa-bounce faa-slow"></i></button>
            </div>
        </form> --}}
    @endsection()

    @section('table_head')
        <tr class="table-dark">
            @if (!empty($titulo1))
                <th scope="col">{{ $titulo1 }}</th>
            @endif
            @if (!empty($titulo2))
                <th scope="col">{{ $titulo2 }}</th>
            @endif
            @if (!empty($titulo3))
                <th scope="col">{{ $titulo3 }}</th>
            @endif
            @if (!empty($titulo4))
                <th scope="col">{{ $titulo4 }}</th>
            @endif
            @if (!empty($titulo5))
                <th scope="col">{{ $titulo5 }}</th>
            @endif
            @if (!empty($titulo6))
                <th scope="col">{{ $titulo6 }}</th>
            @endif
            @if (!empty($titulo7))
                <th scope="col">{{ $titulo7 }}</th>
            @endif
            @if (!empty($titulo8))
                <th scope="col">{{ $titulo8 }}</th>
            @endif
            @if (!empty($boton))
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">boton</span>
                </th>
            @endif


        </tr>
    @endsection()

    @section('table_body')
        <td>sdsds</td>

        @foreach ($listar as $item)
            <tr scope="row">

                @if ($tipo == 'calificaciones')
                    <td> {{ $item->asignatura }} </td>
                @else
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->apellido }} </td>
                    <td> {{ $item->dni }} </td>
                    <td>@livewire('alumno', ['lista' => $item], key($item->id))</td>
                    @if (!empty($boton))
                        <td>@livewire('boton', ['boton' => $item], key($item->id))</td>
                    @endif
                @endif


            </tr>
        @endforeach

    @endsection()
</div>
