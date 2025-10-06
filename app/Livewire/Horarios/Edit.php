<?php

namespace App\Livewire\Horarios;

use App\Livewire\Forms\HorarioForm;
use App\Models\Horario;
use Livewire\Component;

class Edit extends Component
{
    public HorarioForm $form;

    public function mount(Horario $horario)
    {
        $this->form->setHorarioModel($horario);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('horarios.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.horario.edit');
    }
}
