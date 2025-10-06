<div class="space-y-6">

    <div>
        <flux:select wire:model="form.id_empleado" :label="__('Empleado')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Empleado::all() as $e)
                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div>
        <flux:select wire:model="form.id_tipo_permiso" :label="__('Tipo permiso')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\TipoPermiso::all() as $t)
                <option value="{{ $t->id }}">{{ $t->nombre }}</option>
            @endforeach
        </flux:select>
    </div>

    <div>
        <flux:input wire:model="form.fecha_creacion" :label="__('Fecha creacion')" type="date"  autocomplete="form.fecha_creacion" />
    </div>

    <div>
        <flux:input wire:model="form.fecha_inicio" :label="__('Fecha inicio')" type="date"  autocomplete="form.fecha_inicio" />
    </div>

    <div>
        <flux:input wire:model="form.fecha_fin" :label="__('Fecha fin')" type="date"  autocomplete="form.fecha_fin" />
    </div>

    <div>
        <flux:textarea wire:model="form.motivo" :label="__('Motivo')" />
    </div>

    <div>
        <flux:input wire:model="form.adjuntos" :label="__('Adjuntos')" type="text"  autocomplete="form.adjuntos" />
    </div>

    <div>
        <flux:input wire:model="form.comentarios" :label="__('Comentarios')" type="text"  autocomplete="form.comentarios" />
    </div>

    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>
