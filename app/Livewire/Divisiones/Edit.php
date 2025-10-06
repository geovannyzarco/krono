<?php

namespace App\Livewire\Divisiones;

use App\Livewire\Forms\DivisionForm;
use App\Models\Division;
use Livewire\Component;

class Edit extends Component
{
    public DivisionForm $form;

    public function mount(Division $division)
    {
        $this->form->setDivisionModel($division);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('divisiones.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.division.edit');
    }
}
