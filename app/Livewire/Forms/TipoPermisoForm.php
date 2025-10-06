<?php

namespace App\Livewire\Forms;

use App\Models\TipoPermiso;
use Livewire\Form;

class TipoPermisoForm extends Form
{
    public ?TipoPermiso $tipoPermisoModel;
    public $nombre = '';

    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
        ];
    }

    public function setTipoPermisoModel(TipoPermiso $tipoPermisoModel): void
    {
        $this->tipoPermisoModel = $tipoPermisoModel;

        $this->nombre = $this->tipoPermisoModel->nombre;
    }

    public function store(): void
    {
        $this->tipoPermisoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->tipoPermisoModel->update($this->validate());

        $this->reset();
    }
}
