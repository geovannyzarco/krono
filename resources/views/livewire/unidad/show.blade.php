<div class="space-y-6">
    <h1 class="text-xl font-semibold">Unidad: {{ $unidad->nombre }}</h1>

    <div class="grid gap-6">
        <div class="grid gap-2">
            <flux:label>{{ __('Nombre') }}</flux:label>
            <div class="text-sm text-gray-700">{{ $unidad->nombre }}</div>
        </div>

        <div class="grid gap-2">
            <flux:label>{{ __('Descripcion') }}</flux:label>
            <div class="text-sm text-gray-700">{{ $unidad->descripcion }}</div>
        </div>

        <div class="grid gap-2">
            <flux:label>{{ __('Division') }}</flux:label>
            <div class="text-sm text-gray-700">{{ optional($unidad->division)->nombre }}</div>
        </div>
    </div>

    <div>
        <a href="{{ route('unidades.index') }}" class="flux-button">Volver</a>
    </div>
</div>
