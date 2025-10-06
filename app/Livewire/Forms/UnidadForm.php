<?php

namespace App\Livewire\Forms;

use App\Models\Unidad;
use Livewire\Form;

class UnidadForm extends Form
{
    public ?Unidad $unidadModel;

    public $nombre = '';
    public $descripcion = '';
    public $id_division = null;
    public $id_jefe = null;

    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'id_division' => 'nullable|exists:divisiones,id',
            'id_jefe' => 'nullable|exists:empleados,id',
        ];
    }

    public function setUnidadModel(Unidad $unidadModel): void
    {
        $this->unidadModel = $unidadModel;

        $this->nombre = $this->unidadModel->nombre ?? '';
        $this->descripcion = $this->unidadModel->descripcion ?? '';
        $this->id_division = $this->unidadModel->id_division ?? null;
        $this->id_jefe = $this->unidadModel->id_jefe ?? null;
    }

    public function store(): void
    {
        Unidad::create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->unidadModel->update($this->validate());

        $this->reset();
    }
}
