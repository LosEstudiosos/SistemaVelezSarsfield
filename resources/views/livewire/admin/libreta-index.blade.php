<div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="cursor-pointer px-6 py-3">
                    Asignaturas
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    1° trimestre
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    2° trimestre
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    3° trimestre
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    Fin de año
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    Dic 2022
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    Feb 2023
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center">
                    Nota final
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asignaturas as $asignatura)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="px-6 py-4">{{$asignatura->asignatura}}</td>
                <td class="px-6 py-4 text-center">10</td>
                <td class="px-6 py-4 text-center">9</td>
                <td class="px-6 py-4 text-center">8</td>
                <td class="px-6 py-4 text-center">7</td>
                <td class="px-6 py-4 text-center">6</td>
                <td class="px-6 py-4 text-center">5</td>
                <td class="px-6 py-4 text-center">4</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
