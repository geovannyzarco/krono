<?php

namespace App\Livewire\Unidades;

use App\Models\Unidad;
use Livewire\Component;

class Show extends Component
{
    public Unidad $unidad;

    public function mount(Unidad $unidad)
    {
        $this->unidad = $unidad;
    }

    public function render()
    {
        return view('livewire.unidad.show');
    }
}
