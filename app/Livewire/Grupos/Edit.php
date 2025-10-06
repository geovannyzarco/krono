<?php

namespace App\Livewire\Grupos;

use App\Livewire\Forms\GrupoForm;
use App\Models\Grupo;
use Livewire\Component;

class Edit extends Component
{
    public GrupoForm $form;

    public function mount(Grupo $grupo)
    {
        $this->form->setGrupoModel($grupo);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('grupos.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.grupo.edit');
    }
}
