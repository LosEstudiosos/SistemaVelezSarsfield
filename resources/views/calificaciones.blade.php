<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Calificaciones
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-lista clase="bg" color="info" >
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
                {{$Alumno}}
            </div>
        </div>
    </div>
</x-app-layout>