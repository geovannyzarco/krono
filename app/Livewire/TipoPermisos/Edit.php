<?php

namespace App\Livewire\TipoPermisos;

use App\Livewire\Forms\TipoPermisoForm;
use App\Models\TipoPermiso;
use Livewire\Component;

class Edit extends Component
{
    public TipoPermisoForm $form;

    public function mount(TipoPermiso $tipoPermiso)
    {
        $this->form->setTipoPermisoModel($tipoPermiso);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('tipo_permisos.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.tipopermiso.edit');
    }
}
