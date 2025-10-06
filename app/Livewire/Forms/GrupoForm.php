<?php

namespace App\Livewire\Forms;

use App\Models\Grupo;
use Livewire\Form;

class GrupoForm extends Form
{
    public ?Grupo $grupoModel;
    
    public $nombre = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
        ];
    }

    public function setGrupoModel(Grupo $grupoModel): void
    {
        $this->grupoModel = $grupoModel;
        
        $this->nombre = $this->grupoModel->nombre;
    }

    public function store(): void
    {
        $this->grupoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->grupoModel->update($this->validate());

        $this->reset();
    }
}
