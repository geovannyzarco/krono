<?php

namespace App\Livewire\Permisos;

use App\Models\Permiso;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $permisos = Permiso::paginate();

        return view('livewire.permiso.index', compact('permisos'))
            ->with('i', $this->getPage() * $permisos->perPage());
    }

    public function delete(Permiso $permiso)
    {
        $permiso->delete();

        return $this->redirectRoute('permisos.index', navigate: true);
    }
}
