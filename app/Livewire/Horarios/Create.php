<?php

namespace App\Livewire\Horarios;

use App\Livewire\Forms\HorarioForm;
use App\Models\Horario;
use Livewire\Component;

class Create extends Component
{
    public HorarioForm $form;

    public function mount(Horario $horario)
    {
        $this->form->setHorarioModel($horario);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('horarios.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.horario.create');
    }
}
