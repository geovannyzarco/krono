<div class="space-y-6">
    
    <div>
        <flux:input wire:model="form.nombre" :label="__('Nombre')" type="text"  autocomplete="form.nombre" placeholder="Nombre"/>
    </div>

    <div>
        <flux:input wire:model="form.hora_jornada" :label="__('Hora jornada')" type="number"  autocomplete="form.hora_jornada" placeholder="Hora jornada"/>
    </div>

    <div>
        <flux:input wire:model="form.hora_personales" :label="__('Hora personales')" type="time"  autocomplete="form.hora_personales" placeholder="Hora personales"/>
    </div>

    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>
