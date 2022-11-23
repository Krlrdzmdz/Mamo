
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="#" class="text-xlfont-bold">
                        {{ $vacante->titulo }}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacante->puesto }}</p>
                    <p class="text-sm text-gray-500">Ultimo dia: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                </div>
                <div class="flex gap-3 items-center mt-5 md:mt-0">
                    <a href="#" 
                    class="bg-gray-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">Candidatos
                    </a>

                    <a href="#"
                    class="bg-gray-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">Editar
                    </a>

                    <a href="#"
                    class="bg-gray-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">Eliminar
                    </a>
                </div>
            </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse
</div>

<div class="flex justify-center mt-10">
    {{ $vacantes->links() }}
</div>