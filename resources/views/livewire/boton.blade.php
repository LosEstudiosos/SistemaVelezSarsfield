<div>
    <div class="flex">
        <form class="ml-auto" action="{{ route('calificaciones2', $boton->id) }}" method="post">
            @csrf
            <button
                class="no-underline inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                type="submit">Mostrar</button>
        </form>

        <form class="mr-auto" action="{{ route('cargaNotas', $boton->id) }}" method="post">
            @csrf
            <button
                class="no-underline inline-flex items-center justify-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-600 disabled:opacity-25 transition"
                type="submit">Editar</button>
        </form>
    </div>


</div>
