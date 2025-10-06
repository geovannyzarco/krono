<?php

namespace App\Livewire\Horarios;

use App\Models\Horario;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $horarios = Horario::paginate();

        return view('livewire.horario.index', compact('horarios'))
            ->with('i', $this->getPage() * $horarios->perPage());
    }

    public function delete(Horario $horario)
    {
        $horario->delete();

        return $this->redirectRoute('horarios.index', navigate: true);
    }
}
