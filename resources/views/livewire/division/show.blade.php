<div class="space-y-6">
    <h1 class="text-xl font-semibold">Division: {{ $division->nombre }}</h1>

    <div>
        <p><strong>Ubicacion:</strong> {{ $division->ubicacion }}</p>
        <p><strong>Email:</strong> {{ $division->email }}</p>
    </div>

    <div>
        <a href="{{ route('divisiones.index') }}" class="flux-button">Volver</a>
    </div>
</div>
