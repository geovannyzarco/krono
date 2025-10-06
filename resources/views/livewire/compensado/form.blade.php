<div class="space-y-6">

    <div>
        <flux:input wire:model="form.fecha_creacion" :label="__('Fecha creacion')" type="date"  autocomplete="form.fecha_creacion" />
    </div>

    <div>
        <flux:input wire:model="form.desde" :label="__('Desde')" type="date"  autocomplete="form.desde" />
    </div>

    <div>
        <flux:input wire:model="form.hasta" :label="__('Hasta')" type="date"  autocomplete="form.hasta" />
    </div>

    <div>
        <flux:textarea wire:model="form.justificacion" :label="__('Justificacion')" />
    </div>

    <div>
        <flux:select wire:model="form.id_permiso" :label="__('Permiso')">
            <option value="">-- Seleccione --</option>
            @foreach(App\Models\Permiso::all() as $p)
                <option value="{{ $p->id }}">{{ $p->motivo }} ({{ $p->fecha_inicio }} - {{ $p->fecha_fin }})</option>
            @endforeach
        </flux:select>
    </div>

    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>
