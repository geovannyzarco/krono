<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-semibold">Unidades</h1>
        <a href="{{ route('unidades.create') }}" class="flux-button flux-button--primary">Crear</a>
    </div>

    <div class="mt-4">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">Nombre</th>
                    <th class="px-6 py-3 text-left">Division</th>
                    <th class="px-6 py-3 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unidades as $unidad)
                <tr>
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $unidad->nombre }}</td>
                    <td class="px-6 py-4">{{ optional($unidad->division)->nombre }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('unidades.show', $unidad) }}" class="text-blue-600">Ver</a>
                        <a href="{{ route('unidades.edit', $unidad) }}" class="text-indigo-600 ml-2">Editar</a>
                        <button wire:click="delete({{ $unidad->id }})" class="text-red-600 ml-2">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
