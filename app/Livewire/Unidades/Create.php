<?php

namespace App\Livewire\Unidades;

use App\Livewire\Forms\UnidadForm;
use App\Models\Unidad;
use Livewire\Component;

class Create extends Component
{
    public UnidadForm $form;

    public function mount(): void
    {
        // provide an empty Unidad model to the form pattern
        $this->form->setUnidadModel(new Unidad());
    }

    public function save(): void
    {
        $this->form->store();

        $this->redirectRoute('unidades.index');
    }

    public function render()
    {
        return view('livewire.unidad.create');
    }
}
