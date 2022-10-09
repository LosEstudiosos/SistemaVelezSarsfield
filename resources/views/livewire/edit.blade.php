<div>
    <x-jet-button wire:click="$set('open',true)">
        edit
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Editar
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="titulo" />
                
                <x-jet-input wire:model="user.title" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="contenido" />
                
                <x-jet-input wire:model="user.content" type="text" class="w-full" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <div class="mr-4">
                <x-jet-secondary-button wire:click="$set('open', false)">
                    Cancelar
                </x-jet-secondary-button>
            </div>
            
            <x-jet-danger-button wire:click="save" wire.loading.attr="disabled" class="disabled:opacity-25">
                editar
            </x-jet-danger-button>

            <span wire:loading wire:target="save" >Cargando...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
