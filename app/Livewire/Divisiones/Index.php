<?php

namespace App\Livewire\Divisiones;

use App\Models\Division;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $divisiones = Division::orderBy('nombre')->paginate();

        return view('livewire.division.index', compact('divisiones'))
            ->with('i', ($divisiones->currentPage() - 1) * $divisiones->perPage());
    }

    public function delete(Division $division)
    {
        $division->delete();

        return $this->redirectRoute('divisiones.index');
    }
}
