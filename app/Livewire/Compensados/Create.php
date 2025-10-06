<?php

namespace App\Livewire\Compensados;

use App\Livewire\Forms\CompensadoForm;
use App\Models\Compensado;
use Livewire\Component;

class Create extends Component
{
    public CompensadoForm $form;

    public function mount(Compensado $compensado)
    {
        $this->form->setCompensadoModel($compensado);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('compensados.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.compensado.create');
    }
}
