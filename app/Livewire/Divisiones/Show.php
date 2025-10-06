<?php

namespace App\Livewire\Divisiones;

use App\Livewire\Forms\DivisionForm;
use App\Models\Division;
use Livewire\Component;

class Show extends Component
{
    public Division $division;

    public function mount(Division $division)
    {
        $this->division = $division;
    }

    public function render()
    {
        return view('livewire.division.show', ['division' => $this->division]);
    }
}
