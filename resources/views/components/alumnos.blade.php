<div>

    @extends('layouts.plantilla')

    @section('title', 'Usuarios - Registrar')

    @section('header')
    {{ $slot }}
    @endsection()

    @section('content')
    {{ $ruta }}{{ $user }}
    <div class="row justify-content-center">
        <div class="ml-lg-5 col-7 bg-white b border border-5 border-dark">
            {{-- <form action="{{ route($ruta, $user) }}" method="{{ $metodo }}">
                <div class="row">
                    @csrf
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <input size="4" class="border-3 b-i" type="text" name="id" placeholder='Id' value="{{ $user }}" />
                    </div>
                    {{ $input }}
                    <div class="col-12 my-3 d-flex justify-content-center">
                        <button type="submit" class="btn bt-r btn-info">{{$boton}}</button>
                    </div>
            </form> --}}

            {!! Form::model($user, ['route' => [$ruta, $user], 'method' => $metodo]) !!}
            <input size="4" class="border-3 b-i" type="hidden" name="id" placeholder='Id' value="{{ $user }}" />
            <div class="row">
                <label class="col-12 d-flex justify-content-end mt-3">
                    {{ $input }}
                </label>
                
            </div>
            {!! Form::submit('Guardar', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4
            rounded-full mt-3']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-12 align-self-start text-center">
            <a href="/usuarios" type="submit" class="text-white btn btn-link m-0 bu">Volver</a>
        </div>
    </div>
    @endsection()
</div>