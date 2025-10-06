<?php

namespace App\Livewire\Forms;

use App\Models\Empleado;
use Livewire\Form;

class EmpleadoForm extends Form
{
    public ?Empleado $empleadoModel;

    public $nombre = '';
    public $ONI = '';
    public $id_grupo = null;
    public $id_horario = null;
    public $id_unidad = null;
    public $id_estado = null;
    public $id_categoria = null;

    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'ONI' => 'required|string|unique:empleados,ONI,' . ($this->empleadoModel->id ?? 'NULL'),
            'id_grupo' => 'nullable|exists:grupos,id',
            'id_horario' => 'nullable|exists:horarios,id',
            'id_unidad' => 'nullable|exists:unidades,id',
            'id_estado' => 'nullable|exists:estados,id',
            'id_categoria' => 'nullable|exists:categorias,id',
        ];
    }

    public function setEmpleadoModel(Empleado $empleadoModel): void
    {
        $this->empleadoModel = $empleadoModel;

        $this->nombre = $this->empleadoModel->nombre;
        $this->ONI = $this->empleadoModel->ONI;
        $this->id_grupo = $this->empleadoModel->id_grupo;
        $this->id_horario = $this->empleadoModel->id_horario;
        $this->id_unidad = $this->empleadoModel->id_unidad;
        $this->id_estado = $this->empleadoModel->id_estado;
        $this->id_categoria = $this->empleadoModel->id_categoria;
    }

    public function store(): void
    {
        $this->empleadoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->empleadoModel->update($this->validate());

        $this->reset();
    }
}
