<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar roles
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('info'))
                <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
                    {{ session('info') }}
                  </div>
                @endif
                <div class=" px-6 py-3  items-center">
                    <p class="border border-b-8 border-gray-200">{{ $usuario->name }}</p>
                    
                    {!! Form::model($usuario, ['route' => ['userRoles.update', $usuario], 'method' => 'post']) !!}
                        @foreach ($Roles as $rol)
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                                    {{ $rol->name }}
                                </label>
                            </div>
                        @endforeach
                        {!! Form::submit('Guardar', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-5']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>