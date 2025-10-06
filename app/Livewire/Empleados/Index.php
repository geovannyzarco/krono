<?php

namespace App\Livewire\Empleados;

use App\Models\Empleado;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $empleados = Empleado::paginate();

        return view('livewire.empleado.index', compact('empleados'))
            ->with('i', $this->getPage() * $empleados->perPage());
    }

    public function delete(Empleado $empleado)
    {
        $empleado->delete();

        return $this->redirectRoute('empleados.index', navigate: true);
    }
}
