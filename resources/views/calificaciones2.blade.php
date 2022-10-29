<x-lista clase="bg" color="info" lista="{{$Lista}}">
    Estudiante: {{$User->name}} {{$User->apellido}}
    <x-slot name="titulo1">
        Asignatura
    </x-slot>
    <x-slot name="titulo2">
        Primer trimestre
    </x-slot>
    <x-slot name="titulo3">
        Segundo trimestre
    </x-slot>
    <x-slot name="titulo4">
        Tercer trimestre
    </x-slot>
    <x-slot name="titulo5">
        Promedio anual
    </x-slot>
    <x-slot name="titulo6">
        Diciembre
    </x-slot>
    <x-slot name="titulo7">
        Febrero
    </x-slot>
    <x-slot name="titulo8">
        Nota definitiva
    </x-slot>
</x-lista>