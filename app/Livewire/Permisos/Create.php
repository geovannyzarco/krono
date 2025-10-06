<?php

namespace App\Livewire\Permisos;

use App\Livewire\Forms\PermisoForm;
use App\Models\Permiso;
use Livewire\Component;

class Create extends Component
{
    public PermisoForm $form;

    public function mount(Permiso $permiso)
    {
        $this->form->setPermisoModel($permiso);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('permisos.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.permiso.create');
    }
}
