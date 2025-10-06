<?php

namespace App\Livewire\Compensados;

use App\Livewire\Forms\CompensadoForm;
use App\Models\Compensado;
use Livewire\Component;

class Show extends Component
{
    public CompensadoForm $form;

    public function mount(Compensado $compensado)
    {
        $this->form->setCompensadoModel($compensado);
    }

    public function render()
    {
        return view('livewire.compensado.show', ['compensado' => $this->form->compensadoModel]);
    }
}
