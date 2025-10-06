<?php

namespace App\Livewire\Compensados;

use App\Models\Compensado;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $compensados = Compensado::paginate();

        return view('livewire.compensado.index', compact('compensados'))
            ->with('i', $this->getPage() * $compensados->perPage());
    }

    public function delete(Compensado $compensado)
    {
        $compensado->delete();

        return $this->redirectRoute('compensados.index', navigate: true);
    }
}
