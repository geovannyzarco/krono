<?php

namespace App\Livewire\Unidades;

use App\Models\Unidad;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $unidades = Unidad::orderBy('nombre')->paginate();

        return view('livewire.unidad.index', compact('unidades'))
            ->with('i', ($unidades->currentPage() - 1) * $unidades->perPage());
    }

    public function delete(Unidad $unidad)
    {
        $unidad->delete();

        return $this->redirectRoute('unidades.index');
    }
}
