<?php

namespace App\Livewire\Forms;

use App\Models\Division;
use Livewire\Form;

class DivisionForm extends Form
{
    public ?Division $divisionModel;
    public $nombre = '';
    public $ubicacion = '';
    public $email = '';
    public $id_jefe = null;

    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'ubicacion' => 'required|string',
            'email' => 'required|email',
            'id_jefe' => 'nullable|exists:empleados,id',
        ];
    }

    public function setDivisionModel(Division $divisionModel): void
    {
        $this->divisionModel = $divisionModel;

        $this->nombre = $this->divisionModel->nombre;
        $this->ubicacion = $this->divisionModel->ubicacion;
        $this->email = $this->divisionModel->email;
        $this->id_jefe = $this->divisionModel->id_jefe ?? null;
    }

    public function store(): void
    {
        Division::create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->divisionModel->update($this->validate());

        $this->reset();
    }
}
