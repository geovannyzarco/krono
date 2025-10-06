<?php

namespace App\Livewire\Forms;

use App\Models\Compensado;
use Livewire\Form;

class CompensadoForm extends Form
{
    public ?Compensado $compensadoModel;

    public $fecha_creacion = null;
    public $desde = null;
    public $hasta = null;
    public $justificacion = '';
    public $id_permiso = null;

    public function rules(): array
    {
        return [
            'fecha_creacion' => 'required|date',
            'desde' => 'required|date',
            'hasta' => 'required|date|after_or_equal:desde',
            'justificacion' => 'required|string',
            'id_permiso' => 'required|exists:permisos,id',
        ];
    }

    public function setCompensadoModel(Compensado $compensadoModel): void
    {
        $this->compensadoModel = $compensadoModel;

        $this->fecha_creacion = $this->compensadoModel->fecha_creacion;
        $this->desde = $this->compensadoModel->desde;
        $this->hasta = $this->compensadoModel->hasta;
        $this->justificacion = $this->compensadoModel->justificacion;
        $this->id_permiso = $this->compensadoModel->id_permiso;
    }

    public function store(): void
    {
        $this->compensadoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->compensadoModel->update($this->validate());

        $this->reset();
    }
}
