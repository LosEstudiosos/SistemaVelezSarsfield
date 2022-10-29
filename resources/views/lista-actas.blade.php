<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar roles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div>
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Velez Sarsfield
                        </h2>
                    </x-slot>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <x-table>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="cursor-pointer px-6 py-3">
                                            Id
                                        </th>
                                        <th scope="col" class="cursor-pointer px-6 py-3">
                                            fecha de creacion
                                        </th>
                                        <th scope="col" class="cursor-pointer px-6 py-3"
                                            wire:click="order('content')">
                                            cuerpo
                                        </th>
                                        <th scope="col" class="cursor-pointer px-6 py-3"
                                            wire:click="order('content')">
                                            acuerdo
                                        </th>
                                     <th scope="col" class="cursor-pointer px-6 py-3"
                                            wire:click="order('content')">
                                            Temas del acuerdo
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
                                                @foreach ($Temas as $Tema)
                                                    {{ $Tema->tema }}
                                               @endforeach 
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
                </div> --}}
            @livewire('principal')
            </div>
        </div>
    </div>
</x-app-layout>
