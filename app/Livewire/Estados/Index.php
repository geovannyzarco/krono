<?php

namespace App\Livewire\Estados;

use App\Models\Estado;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $estados = Estado::paginate();

        return view('livewire.estado.index', compact('estados'))
            ->with('i', $this->getPage() * $estados->perPage());
    }

    public function delete(Estado $estado)
    {
        $estado->delete();

        return $this->redirectRoute('estados.index', navigate: true);
    }
}
