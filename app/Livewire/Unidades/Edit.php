<?php

namespace App\Livewire\Unidades;

use App\Livewire\Forms\UnidadForm;
use App\Models\Unidad;
use Livewire\Component;

class Edit extends Component
{
    public UnidadForm $form;

    public function mount(Unidad $unidad): void
    {
        $this->form->setUnidadModel($unidad);
    }

    public function save(): void
    {
        $this->form->update();

        $this->redirectRoute('unidades.index');
    }

    public function render()
    {
        return view('livewire.unidad.edit');
    }
}
