<div class="row">
    <h4 class="col-6 text-center">{{ $titulo1 }}</h4>
    <h4 class="col-6 text-center">{{ $titulo2 }}</h4>
    @foreach ($listar as $item)
        <p class="col-6 text-left">{{$item->apellido}} {{$item->name}}</p>
        <div class="col-6">
            <x-ingresonotas>Nota</x-ingresonotas>
        </div>  
    @endforeach
</div>
{{-- @foreach ($listar as $item)
                <tr scope="row"> --}}

    {{-- @if ($tipo == 'calificaciones')
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
                    @endif --}}
    {{-- <td> {{ $item->name }} </td>
                    <td> {{ $item->apellido }} </td>

                </tr>
            @endforeach --}}