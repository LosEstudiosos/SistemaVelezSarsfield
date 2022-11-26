<div>
    <x-table>
        <div class="card-header">
            <input class="form-control" placeholder="Buscar" wire:model="search">
        </div>
        @if ($roles->count())

        {{-- <div class="px-6 py-3 flex items-center">
            <x-jet-input class="flex-1 mr-4" placeholder="Buscar" type="text" wire:model="search" />
        </div> --}}


        <table class=" text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('id')">
                        Id
                    </th>
                    <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('title')">
                        Roles
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <td class="px-6 py-4">{{ $role->id }}</td>
                    <td class="px-6 py-4">{{ $role->name }}</td>
                    <td width="10px">
                        <a class="btn btn-warning {{-- bg-yellow-300 hover:bg-yellow-200 text-black font-bold py-2 px-4 rounded-full --}}"
                            href="{{ route('admin.roles.edit', $role) }}">Editar</a>
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
        <div class="card-footer">
            {{ $roles->links() }}
        </div>


    </x-table>
</div>
