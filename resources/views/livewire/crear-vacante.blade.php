
<form class="md: w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo de la Vacante')" />

        <x-text-input   id="titulo" 
                        class="block mt-1 w-full " 
                        type="text" 
                        wire.model="titulo" 
                        :value="old('titulo')" 
        />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select  
            id="salario"
            wire:model="salario"
            class="rounded-md block border-gray-300 w-full">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{$salario->$salario}}</option>
            @endforeach

        </select>

        @error('salario')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select  
            id="categoria"
            wire:mode="categoria"
            class="rounded-md block border-gray-300 w-full">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{$categoria->$categoria}}</option>
            @endforeach
        </select>

        @error('categoria')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for="puesto" :value="__('Puesto')" />

        <x-text-input   id="puesto" 
                        class="block mt-1 w-full" 
                        type="text"
                        wire:model="puesto" 
                        :value="old('puesto')" 
        />

        @error('puesto')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
        

    </div>

    <div>
        <x-input-label for="ultimo-dia" :value="__('Ultimo dia para postularse')" />

        <x-text-input   id="ultimo_dia" 
                        class="block mt-1 w-full" 
                        type="date" 
                        wire:model="ultimo_dia" 
                        :value="old('ultimo_dia')" 
        />

        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

   <!-- <div>
        <x-input-label for="puesto" :value="__('Descripcion del puesto')" />

        <textarea 
            wire:model="descripcion" 
            class="rounded-md block border-gray-300 w-full h-72">
        </textarea>

    </div>-->

    <div class="border border-custom">
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input   id="imagen" 
                        class="block mt-1 w-full" 
                        type="file" 
                        wire:model="imagen" 
                        accept="image/*"
        />

        <div class="my-5">
            @if($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}">
            @endif
        </div>

        @error('imagen')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
        
    </div>
        <x-primary-button class="border-custom">
            {{ __('Crear Vacante') }}
        </x-primary-button>
        

</form>
  