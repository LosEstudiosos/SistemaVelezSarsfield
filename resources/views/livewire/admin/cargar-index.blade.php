<div class="row justify-content-center">
    <div class="ml-lg-5 col-7 bg-white b border border-5 border-dark">
        {{-- <form action="{{ route('admin.Cargar.store') }}" method="POST"> --}}
            {!! Form::model($listar, ['route' => ['admin.cargarNotas.store'], 'method' => 'GET']) !!}
            <div class="row">
                @csrf
                <div class="col-12 d-flex justify-content-end mt-3">
                    <input size="4" class="border-3 b-i" type="hidden" name="id" placeholder='Id' value="0" />
                </div>

                {{--
                <div class="{{ $clase }}">
                    {{ $InputUno }}
                </div>
                <div class="{{ $clase }}">
                    {{ $InputDos }}
                </div>
                <div class="{{ $clase }}">
                    {{ $InputTres }}
                </div>
                <div class="{{ $clase }}">
                    {{ $InputCuatro }}
                </div>
                <div class="{{ $clase }}">
                    {{ $InputCinco }}
                </div>
                <div class="{{ $clase }}">
                    {{ $InputSeis }}
                </div>

                <div class="col-12 my-3 d-flex justify-content-center">
                    <button type="submit" class="btn bt-r btn-info">{{ $boton }}</button>
                </div>
            </div> --}}

            <x-seleccionador clase="col-3 mt-3">
                {{-- <x-slot name="InputUno">
                    {{ $InputUno }} Algo
                </x-slot> --}}
                {{-- <x-slot name="InputDos">
                    {{ $InputDos }}
                </x-slot> --}}
                <x-slot name="InputTres">
                    <x-Ingresonotas>
                        Seleccione año lectivo
                    </x-Ingresonotas>
                </x-slot>
                <x-slot name="InputCuatro">
                    <x-ingresoseleccionador select="instancias">
                        Seleccione Instancia
                    </x-ingresoseleccionador>
                </x-slot>
                <x-slot name="InputCinco">
                    <x-ingresoseleccionador select="curso">
                        Seleccione año/división
                    </x-ingresoseleccionador>
                </x-slot>
                <x-slot name="InputSeis">
                    <x-ingresoseleccionador select="asignatura">
                        Seleccione asignatura
                    </x-ingresoseleccionador>
                </x-slot>
                {{-- <x-slot name="boton"> --}}
                    {{--
                </x-slot> --}}
            </x-seleccionador>


            <div class="row">
                <h4 class="col-6 text-center">Apellido y Nombre</h4>
                <h4 class="col-6 text-center">Notas</h4>
                @foreach ($listar as $item)
                    
                    <p class="col-6 text-left">{{$item->User->last_name}} {{$item->User->name}}
                        <input size="4" class="border-3 b-i" type="text" name="id" placeholder='Id' value="{{ $item->id }}" />
                    </p>
                    <div class="col-6">
                        <x-ingresonotas>Nota</x-ingresonotas>
                    </div>
                @endforeach
            </div>

            <div class="col-12 my-3 d-flex justify-content-center">
                {{-- <button type="submit" class="btn bt-r btn-info">Guardar</button> --}}
                {!! Form::submit('Guardar', ['class' => 'btn bt-r btn-info']) !!}
            </div>
            
        {{-- </form> --}}
        {!! Form::close() !!}
    </div>
    <div class="col-12 align-self-start text-center">
        <a href="/usuarios" type="submit" class="text-white btn btn-link m-0 bu">Volver</a>
    </div>
</div>