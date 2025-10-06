<div class="space-y-6">
    
    <div>
        <flux:input wire:model="form.nombre" :label="__('Nombre')" type="text"  autocomplete="form.nombre" placeholder="Nombre"/>
    </div>

    <div>
        <flux:input wire:model="form.ONI" :label="__('ONI')" type="text"  autocomplete="form.ONI" placeholder="ONI"/>
    </div>

    <div>
        <flux:select wire:model="form.id_grupo" :label="__('Grupo')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Grupo::all() as $g)
                <option value="{{ $g->id }}">{{ $g->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div>
        <flux:select wire:model="form.id_horario" :label="__('Horario')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Horario::all() as $h)
                <option value="{{ $h->id }}">{{ $h->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div>
        <flux:select wire:model="form.id_unidad" :label="__('Unidad')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Unidad::all() as $u)
                <option value="{{ $u->id }}">{{ $u->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div>
        <flux:select wire:model="form.id_estado" :label="__('Estado')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Estado::all() as $e)
                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div>
        <flux:select wire:model="form.id_categoria" :label="__('Categoria')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Categoria::all() as $c)
                <option value="{{ $c->id }}">{{ $c->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>
