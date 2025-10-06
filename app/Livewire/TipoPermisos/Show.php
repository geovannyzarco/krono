<?php

namespace App\Livewire\TipoPermisos;

use App\Livewire\Forms\TipoPermisoForm;
use App\Models\TipoPermiso;
use Livewire\Component;

class Show extends Component
{
    public TipoPermisoForm $form;

    public function mount(TipoPermiso $tipoPermiso)
    {
        $this->form->setTipoPermisoModel($tipoPermiso);
    }

    public function render()
    {
        return view('livewire.tipopermiso.show', ['tipoPermiso' => $this->form->tipoPermisoModel]);
    }
}
