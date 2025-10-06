<?php

namespace App\Livewire\Empleados;

use App\Livewire\Forms\EmpleadoForm;
use App\Models\Empleado;
use Livewire\Component;

class Edit extends Component
{
    public EmpleadoForm $form;

    public function mount(Empleado $empleado)
    {
        $this->form->setEmpleadoModel($empleado);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('empleados.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.empleado.edit');
    }
}
