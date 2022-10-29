<table>
    <x-formulario clase="col-2 mt-3">
        Ingrese aquí las notas de:
        <x-slot name="InputUno">
            <div>
                <label class="mt-2" for="">{{ $notas->name }} {{ $notas->apellido }}</label>
            </div>
        </x-slot>
        <x-slot name="InputDos">
            <div>
                <x-ingresonotas>
                    Primer Trimestre
                </x-ingresonotas>
            </div>
        </x-slot>
        <x-slot name="InputTres">
            <div>
                <x-ingresonotas>
                    Segundo Trimestre
                </x-ingresonotas>
            </div>
        </x-slot>
        <x-slot name="InputCuatro">
            <div>
                <x-ingresonotas>
                    Tercer Trimestre
                </x-ingresonotas>
            </div>
        </x-slot>
        <x-slot name="InputCinco">
            <div>
                <x-ingresonotas>
                    Diciembre
                </x-ingresonotas>
            </div>
        </x-slot>
        <x-slot name="InputSeis">
            <div>
                <x-ingresonotas>
                    Febrero
                </x-ingresonotas>
            </div>
        </x-slot>
        <x-slot name="boton">
            <div>
                Grabar
            </div>
        </x-slot>
        
    </x-formulario>
</table>
