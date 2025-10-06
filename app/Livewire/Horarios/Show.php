<?php

namespace App\Livewire\Horarios;

use App\Livewire\Forms\HorarioForm;
use App\Models\Horario;
use Livewire\Component;

class Show extends Component
{
    public HorarioForm $form;

    public function mount(Horario $horario)
    {
        $this->form->setHorarioModel($horario);
    }

    public function render()
    {
        return view('livewire.horario.show', ['horario' => $this->form->horarioModel]);
    }
}
