<?php

namespace App\Livewire\Forms;

use App\Models\Permiso;
use Livewire\Form;

class PermisoForm extends Form
{
    public ?Permiso $permisoModel;

    public $id_empleado = null;
    public $id_tipo_permiso = null;
    public $fecha_creacion = null;
    public $fecha_inicio = null;
    public $fecha_fin = null;
    public $motivo = '';
    public $adjuntos = null;
    public $comentarios = null;

    public function rules(): array
    {
        return [
            'id_empleado' => 'required|exists:empleados,id',
            'id_tipo_permiso' => 'required|exists:tipo_permisos,id',
            'fecha_creacion' => 'required|date',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'motivo' => 'required|string',
            'adjuntos' => 'nullable|string',
            'comentarios' => 'nullable|string',
        ];
    }

    public function setPermisoModel(Permiso $permisoModel): void
    {
        $this->permisoModel = $permisoModel;

        $this->id_empleado = $this->permisoModel->id_empleado;
        $this->id_tipo_permiso = $this->permisoModel->id_tipo_permiso;
        $this->fecha_creacion = $this->permisoModel->fecha_creacion;
        $this->fecha_inicio = $this->permisoModel->fecha_inicio;
        $this->fecha_fin = $this->permisoModel->fecha_fin;
        $this->motivo = $this->permisoModel->motivo;
        $this->adjuntos = $this->permisoModel->adjuntos;
        $this->comentarios = $this->permisoModel->comentarios;
    }

    public function store(): void
    {
        $this->permisoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->permisoModel->update($this->validate());

        $this->reset();
    }
}
