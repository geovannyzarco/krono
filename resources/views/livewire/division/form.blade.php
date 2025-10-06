<div class="space-y-6">
    
    <div>
        <flux:input wire:model="form.nombre" :label="__('Nombre')" type="text"  autocomplete="form.nombre" placeholder="Nombre"/>
    </div>

    <div>
        <flux:input wire:model="form.ubicacion" :label="__('Ubicacion')" type="text"  autocomplete="form.ubicacion" placeholder="Ubicacion"/>
    </div>

    <div>
        <flux:input wire:model="form.email" :label="__('Email')" type="email"  autocomplete="form.email" placeholder="Email"/>
    </div>

    <div>
        <flux:select wire:model="form.id_jefe" :label="__('Jefe')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Empleado::orderBy('nombre')->get() as $e)
                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>
