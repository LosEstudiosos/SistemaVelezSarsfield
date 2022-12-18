<div>
    <a  class="btn btn-primary" wire:click="$set('open', true)">Nota</a>
    

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Editar
        </x-slot>

        <x-slot name='content'>
            sds
        </x-slot>

        <x-slot name='footer'>
            sd
        </x-slot>
    </x-jet-dialog-modal>
</div>
