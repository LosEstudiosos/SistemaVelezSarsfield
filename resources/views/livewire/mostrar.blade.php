<div>
    {{-- <a wire:click="$set('open', true)">
        <i class="fond-bold text-white py-2 px-4 rounded cursor-pointer bg-green-500 hover:bg-green-400">ver</i>
    </a> --}}

    <x-jet-button wire:click="$set('open',true)">
        Temas del acuerdo
    </x-jet-button>
    
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            @foreach ($user as $item)
                {{$item->tema}}
            @endforeach 
        </x-slot>
        <x-slot name="content">

        </x-slot>
        <x-slot name="footer">
            
        </x-slot>
        
    </x-jet-dialog-modal>
</div>

