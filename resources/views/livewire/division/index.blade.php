<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-semibold">Divisiones</h1>
        <a href="{{ route('divisiones.create') }}" class="flux-button flux-button--primary">Crear</a>
    </div>

    <div class="mt-4">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">Nombre</th>
                    <th class="px-6 py-3 text-left">Ubicacion</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($divisiones as $division)
                <tr>
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $division->nombre }}</td>
                    <td class="px-6 py-4">{{ $division->ubicacion }}</td>
                    <td class="px-6 py-4">{{ $division->email }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('divisiones.show', $division) }}" class="text-blue-600">Ver</a>
                        <a href="{{ route('divisiones.edit', $division) }}" class="text-indigo-600 ml-2">Editar</a>
                        <button wire:click="delete({{ $division->id }})" class="text-red-600 ml-2">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
