<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear actas de reunión
        </h2>
    </x-slot>

    <div
        class="container bg-blue-200 mx-auto justify-center py-12 max-w-7xl rounded-lg border-4 border-indigo-600 lg:px-8">

        <form action="{{ route('actas.store') }}" method="POST">

            @csrf

            <div class="flex w-full justify-end max-w-7xl py-4  sm:px-6 lg:px-8">
                {{-- <h1 class="text-lg bg-cyan-400 text-center text-red-500">Estos son las Actas de reunión</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit sunt at enim, quaerat pariatur eligendi velit, sequi non, officiis cumque corporis quae harum odit incidunt quibusdam. Quod maxime a harum. </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit sunt at enim, quaerat pariatur eligendi velit, sequi non, officiis cumque corporis quae harum odit incidunt quibusdam. Quod maxime a harum. </p> --}}

                <div class="text-2xl">Fecha:</div>

                {{-- <x-jet-input type='text' name="fecha" class="mr-6" /> --}}
                <input type="date" name="fecha" class="form-control">

            </div>
            <div class="grid grid-cols-7 max-w-7xl py-4 lg:px-8">

                <label class="text-center">Temas a abordar</label>
                {{-- <x-jet-input type='text' name="temas" class="col-span-6" /> --}}
                <select class="form-control w-full col-span-6" name="temas">
                    {{-- <option value="1">tema 1</option> --}}
                    @foreach ($Temas as $Tema)
                        <option value="{{ $Tema['id'] }}">{{ $Tema['tema'] }}</option>
                    @endforeach
                </select>

            </div>
            <div class="max-w-7xl py-4 sm:px-6 lg:px-8">

                {{-- <textarea name="Participantes" class="form-control w-full" placeholder="Participantes" rows="6"></textarea> --}}
                <select class="form-control w-full col-span-6" id="usuarios" name="Participantes[]"
                    multiple="multiple">
                    <option value="" disabled>Participantes</option>
                    <option selected>Todos</option>
                    @foreach ($user as $item)
                        <option>{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="max-w-7xl py-4 sm:px-6 lg:px-8">

                <textarea name="Abordaje" class="form-control w-full" placeholder="Abordaje" rows="6"></textarea>

            </div>
            <div class="max-w-7xl py-4 sm:px-6 lg:px-8">

                <textarea name="Acuerdo" class="form-control w-full" placeholder="Acuerdo" rows="6"></textarea>

            </div>
            <div class="max-w-7xl py-4 sm:px-6 lg:px-8">

                <textarea name="Firmas" class="form-control w-full" placeholder="Firmas" rows="6"></textarea>

            </div>
            <div class="flex justify-end sm:px-6 lg:px-8 max-w-7xl">
                {{-- <button type="submit">Crear</button> --}}
                <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save"
                    class="disabled:opacity-25">
                    Crear
                </x-jet-danger-button>
            </div>
        </form>



    </div>
</x-app-layout>
