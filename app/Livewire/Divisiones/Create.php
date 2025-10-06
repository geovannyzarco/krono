<?php

namespace App\Livewire\Divisiones;

use App\Livewire\Forms\DivisionForm;
use App\Models\Division;
use Livewire\Component;

class Create extends Component
{
    public DivisionForm $form;

    public function mount(Division $division): void
    {
        $this->form->setDivisionModel($division);
    }

    public function save(): void
    {
        $this->form->store();

        $this->redirectRoute('divisiones.index');
    }

    public function render()
    {
        return view('livewire.division.create');
    }
}
