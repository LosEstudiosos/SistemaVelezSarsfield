<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Velez Sarsfield
        </h2>
    </x-slot>



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="px-6 py-3 flex items-center">
            <x-jet-input class="flex-1 mr-4" placeholder="Buscar" type="text" wire:model="search" />
        </div>


        <x-table>

            @if ($users->count())

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('id')">
                            Id
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('title')">
                            Nombre
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                            Apellido
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                            DNI
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">{{ $user->id }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->apellido }}</td>
                        <td class="px-6 py-4">{{ $user->dni }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td width="10px">
                            <a class=" bg-yellow-300 hover:bg-yellow-200 text-black font-bold py-2 px-4 rounded-full"
                                href="{{ route('userRoles.edit', $user) }}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else

            <div class="px-6 py-3">
                No se encontro ningun registro
            </div>

            @endif

            <div class=" inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white
                rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800
                dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                {{ $users->links() }}
            </div>

        </x-table>

    </div>


</div>

{{-- <div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Velez Sarsfield
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="px-6 py-3 flex items-center">
            <x-jet-input class="flex-1 mr-4" placeholder="Buscar" type="text" wire:model="search" />

            @livewire('create')
        </div>


        <x-table>

            @if ($prueba->count())

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('id')">
                            Id
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('title')">
                            Fecha de creacion
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('title')">
                            Cuerpo
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                            Acuerdo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prueba as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->fecha_creacion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->cuerpo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->acuerdo }}
                        </td>

                        <td class="px-6 py-4">
                            @livewire('edit', ['user' => $user], key($user->id))
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else

            <div class="px-6 py-3">
                No se encontro ningun registro
            </div>

            @endif



        </x-table>

    </div>


</div>
{{-- <div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Velez Sarsfield
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-table>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="cursor-pointer px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3">
                            fecha de creacion
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                            cuerpo
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                            acuerdo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Temas del acuerdo</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Actas as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->fecha_creacion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->cuerpo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->acuerdo }}
                        </td>
                        <td class="px-6 py-4">
                            @livewire('mostrar', ['user' => $user], key($user->id))
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </x-table>
    </div>
    <x-jet-dialog-modal wire:model="open_mostrar">
        <x-slot name="title">
            @foreach ($Temas as $Tema)
            {{$Tema->tema}}
            @endforeach
        </x-slot>
        <x-slot name="content">
            {{ $user->id }}
        </x-slot>
        <x-slot name="footer">

        </x-slot>

    </x-jet-dialog-modal>
</div> --}}