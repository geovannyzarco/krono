<?php

namespace App\Livewire\Grupos;

use App\Livewire\Forms\GrupoForm;
use App\Models\Grupo;
use Livewire\Component;

class Show extends Component
{
    public GrupoForm $form;

    public function mount(Grupo $grupo)
    {
        $this->form->setGrupoModel($grupo);
    }

    public function render()
    {
        return view('livewire.grupo.show', ['grupo' => $this->form->grupoModel]);
    }
}
