<div>
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
                                Title
                            </th>
                            <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('content')">
                                Content
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
                                    {{ $user->title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->content }}
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
