<div class="space-y-6">
    <div>
        <flux:input wire:model="form.nombre" :label="__('Nombre')" type="text"  autocomplete="form.nombre" placeholder="Nombre"/>
    </div>

    <div>
        <flux:input wire:model="form.descripcion" :label="__('Descripcion')" type="text"  autocomplete="form.descripcion" placeholder="Descripcion"/>
    </div>

    <div>
        <flux:select wire:model="form.id_division" :label="__('Division')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Division::orderBy('nombre')->get() as $d)
                <option value="{{ $d->id }}">{{ $d->nombre }}</option>
            @endforeach
        </flux:select>
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
