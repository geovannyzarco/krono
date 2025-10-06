<?php

namespace App\Livewire\Forms;

use App\Models\Estado;
use Livewire\Form;

class EstadoForm extends Form
{
    public ?Estado $estadoModel;
    public $entidad = '';
    public $nombre = '';

    public function rules(): array
    {
        return [
            'entidad' => 'required|string',
            'nombre' => 'required|string',
        ];
    }

    public function setEstadoModel(Estado $estadoModel): void
    {
        $this->estadoModel = $estadoModel;

        $this->entidad = $this->estadoModel->entidad;
        $this->nombre = $this->estadoModel->nombre;
    }

    public function store(): void
    {
        $this->estadoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->estadoModel->update($this->validate());

        $this->reset();
    }
}
