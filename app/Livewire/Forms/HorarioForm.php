<?php

namespace App\Livewire\Forms;

use App\Models\Horario;
use Livewire\Form;

class HorarioForm extends Form
{
    public ?Horario $horarioModel;
    public $nombre = '';
    public $hora_jornada = 0;
    public $hora_personales = '00:00:00';

    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'hora_jornada' => 'required|integer',
            'hora_personales' => 'required',
        ];
    }

    public function setHorarioModel(Horario $horarioModel): void
    {
        $this->horarioModel = $horarioModel;

        $this->nombre = $this->horarioModel->nombre;
        $this->hora_jornada = $this->horarioModel->hora_jornada;
        $this->hora_personales = $this->horarioModel->hora_personales;
    }

    public function store(): void
    {
        $this->horarioModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->horarioModel->update($this->validate());

        $this->reset();
    }
}
