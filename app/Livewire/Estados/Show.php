<?php

namespace App\Livewire\Estados;

use App\Livewire\Forms\EstadoForm;
use App\Models\Estado;
use Livewire\Component;

class Show extends Component
{
    public EstadoForm $form;

    public function mount(Estado $estado)
    {
        $this->form->setEstadoModel($estado);
    }

    public function render()
    {
        return view('livewire.estado.show', ['estado' => $this->form->estadoModel]);
    }
}
