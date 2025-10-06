<?php

namespace App\Livewire\Estados;

use App\Livewire\Forms\EstadoForm;
use App\Models\Estado;
use Livewire\Component;

class Edit extends Component
{
    public EstadoForm $form;

    public function mount(Estado $estado)
    {
        $this->form->setEstadoModel($estado);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('estados.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.estado.edit');
    }
}
