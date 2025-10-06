<?php

namespace App\Livewire\Grupos;

use App\Models\Grupo;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $grupos = Grupo::paginate();

        return view('livewire.grupo.index', compact('grupos'))
            ->with('i', $this->getPage() * $grupos->perPage());
    }

    public function delete(Grupo $grupo)
    {
        $grupo->delete();

        return $this->redirectRoute('grupos.index', navigate: true);
    }
}
