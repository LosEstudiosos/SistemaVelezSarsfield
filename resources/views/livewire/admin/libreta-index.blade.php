<div>
    <div class="flex">
        <h2>Alumno: {{$nombre}}, Curso: {{$curso}}, en el Ciclo Lectivo {{$ciclo_lectivo}}</h2>
        <button type="button" class="btn btn-default ml-auto" id="btnPrint" name="btnPrint"><i class="fas fa-print"></i> Imprimir</button>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="cursor-pointer px-6 py-3">
                    Asignaturas
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    1° trimestre
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    2° trimestre
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    3° trimestre
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    Fin de año
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    Dic 2022
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    Feb 2023
                </th>
                <th scope="col" class="cursor-pointer px-6 text-center">
                    Nota final
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asignaturas as $asignatura)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-3">{{$asignatura->asignatura}}</td>
                <td class="px-6 text-center primerTrimestre">
                    @foreach ($primerTrimestre as $nota)
                        @if ($nota->asignatura_id === $asignatura->id)
                            {{$nota->calificacion}}
                        @endif
                    @endforeach
                </td>
                <td class="px-6 text-center segundoTrimestre">
                    @foreach ($segundoTrimestre as $nota)
                        @if ($nota->asignatura_id === $asignatura->id)
                            {{$nota->calificacion}}
                        @endif
                    @endforeach
                </td>
                <td class="px-6 text-center tercerTrimestre">
                    @foreach ($tercerTrimestre as $nota)
                        @if ($nota->asignatura_id === $asignatura->id)
                            {{$nota->calificacion}}
                        @endif
                    @endforeach
                </td>
                <td class="px-6 text-center finAnio">-</td>
                <td class="px-6 text-center diciembre">
                    @foreach ($diciembre as $nota)
                        @if ($nota->asignatura_id === $asignatura->id)
                            {{$nota->calificacion}}
                        @endif
                    @endforeach
                </td>
                <td class="px-6 text-center febrero">
                    @foreach ($febrero as $nota)
                        @if ($nota->asignatura_id === $asignatura->id)
                            {{$nota->calificacion}}
                        @endif
                    @endforeach
                </td>
                <td class="px-6 text-center notafinal">-</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
