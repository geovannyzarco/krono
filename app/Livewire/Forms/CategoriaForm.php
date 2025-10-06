<?php

namespace App\Livewire\Forms;

use App\Models\Categoria;
use Livewire\Form;

class CategoriaForm extends Form
{
    public ?Categoria $categoriaModel;
    public $nombre = '';

    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
        ];
    }

    public function setCategoriaModel(Categoria $categoriaModel): void
    {
        $this->categoriaModel = $categoriaModel;

        $this->nombre = $this->categoriaModel->nombre;
    }

    public function store(): void
    {
        $this->categoriaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->categoriaModel->update($this->validate());

        $this->reset();
    }
}
