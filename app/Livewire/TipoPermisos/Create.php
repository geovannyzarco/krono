<?php

namespace App\Livewire\TipoPermisos;

use App\Livewire\Forms\TipoPermisoForm;
use App\Models\TipoPermiso;
use Livewire\Component;

class Create extends Component
{
    public TipoPermisoForm $form;

    public function mount(TipoPermiso $tipoPermiso)
    {
        $this->form->setTipoPermisoModel($tipoPermiso);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('tipo_permisos.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.tipopermiso.create');
    }
}
