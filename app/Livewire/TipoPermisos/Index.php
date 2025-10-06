<?php

namespace App\Livewire\TipoPermisos;

use App\Models\TipoPermiso;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $tipos = TipoPermiso::paginate();

        return view('livewire.tipopermiso.index', compact('tipos'))
            ->with('i', $this->getPage() * $tipos->perPage());
    }

    public function delete(TipoPermiso $tipo)
    {
        $tipo->delete();

        return $this->redirectRoute('tipo_permisos.index', navigate: true);
    }
}
