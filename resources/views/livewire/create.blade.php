<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        crear usuario
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Nuevo usuario
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="title" />

                <x-jet-input class="w-full" type="text" wire:model="title" />

                <x-jet-input-error for='title' />
            </div>

            <div class="mb-4">
                <x-jet-label value="content" />

                <x-jet-input class="w-full" type="text" wire:model="content" />

                <x-jet-input-error for='content' />
            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="mr-4">
                <x-jet-secondary-button wire:click="$set('open', false)">
                    Cancelar
                </x-jet-secondary-button>
            </div>
            
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Crear
            </x-jet-danger-button>

            <span wire:loading wire:target="save" >Cargando...</span>
        </x-slot>

    </x-jet-dialog-modal>
</div>
