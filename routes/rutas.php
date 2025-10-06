<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::middleware(['auth'])->group(function () {
    //Grupos
    Route::get('/grupos', \App\Livewire\Grupos\Index::class)->name('grupos.index');
    Route::get('/grupos/create', \App\Livewire\Grupos\Create::class)->name('grupos.create');
    Route::get('/grupos/show/{grupo}', \App\Livewire\Grupos\Show::class)->name('grupos.show');
    Route::get('/grupos/update/{grupo}', \App\Livewire\Grupos\Edit::class)->name('grupos.edit');

    // Categorias
    Route::get('/categorias', \App\Livewire\Categorias\Index::class)->name('categorias.index');
    Route::get('/categorias/create', \App\Livewire\Categorias\Create::class)->name('categorias.create');
    Route::get('/categorias/show/{categoria}', \App\Livewire\Categorias\Show::class)->name('categorias.show');
    Route::get('/categorias/update/{categoria}', \App\Livewire\Categorias\Edit::class)->name('categorias.edit');

    // Horarios
    Route::get('/horarios', \App\Livewire\Horarios\Index::class)->name('horarios.index');
    Route::get('/horarios/create', \App\Livewire\Horarios\Create::class)->name('horarios.create');
    Route::get('/horarios/show/{horario}', \App\Livewire\Horarios\Show::class)->name('horarios.show');
    Route::get('/horarios/update/{horario}', \App\Livewire\Horarios\Edit::class)->name('horarios.edit');

    // Estados
    Route::get('/estados', \App\Livewire\Estados\Index::class)->name('estados.index');
    Route::get('/estados/create', \App\Livewire\Estados\Create::class)->name('estados.create');
    Route::get('/estados/show/{estado}', \App\Livewire\Estados\Show::class)->name('estados.show');
    Route::get('/estados/update/{estado}', \App\Livewire\Estados\Edit::class)->name('estados.edit');

    // Divisiones
    Route::get('/divisiones', \App\Livewire\Divisiones\Index::class)->name('divisiones.index');
    Route::get('/divisiones/create', \App\Livewire\Divisiones\Create::class)->name('divisiones.create');
    Route::get('/divisiones/show/{division}', \App\Livewire\Divisiones\Show::class)->name('divisiones.show');
    Route::get('/divisiones/update/{division}', \App\Livewire\Divisiones\Edit::class)->name('divisiones.edit');

    // Unidades
    Route::get('/unidades', \App\Livewire\Unidades\Index::class)->name('unidades.index');
    Route::get('/unidades/create', \App\Livewire\Unidades\Create::class)->name('unidades.create');
    Route::get('/unidades/show/{unidad}', \App\Livewire\Unidades\Show::class)->name('unidades.show');
    Route::get('/unidades/update/{unidad}', \App\Livewire\Unidades\Edit::class)->name('unidades.edit');

    // Empleados
    Route::get('/empleados', \App\Livewire\Empleados\Index::class)->name('empleados.index');
    Route::get('/empleados/create', \App\Livewire\Empleados\Create::class)->name('empleados.create');
    Route::get('/empleados/show/{empleado}', \App\Livewire\Empleados\Show::class)->name('empleados.show');
    Route::get('/empleados/update/{empleado}', \App\Livewire\Empleados\Edit::class)->name('empleados.edit');

    // Tipo permisos
    Route::get('/tipo_permisos', \App\Livewire\TipoPermisos\Index::class)->name('tipo_permisos.index');
    Route::get('/tipo_permisos/create', \App\Livewire\TipoPermisos\Create::class)->name('tipo_permisos.create');
    Route::get('/tipo_permisos/show/{tipoPermiso}', \App\Livewire\TipoPermisos\Show::class)->name('tipo_permisos.show');
    Route::get('/tipo_permisos/update/{tipoPermiso}', \App\Livewire\TipoPermisos\Edit::class)->name('tipo_permisos.edit');

    // Permisos
    Route::get('/permisos', \App\Livewire\Permisos\Index::class)->name('permisos.index');
    Route::get('/permisos/create', \App\Livewire\Permisos\Create::class)->name('permisos.create');
    Route::get('/permisos/show/{permiso}', \App\Livewire\Permisos\Show::class)->name('permisos.show');
    Route::get('/permisos/update/{permiso}', \App\Livewire\Permisos\Edit::class)->name('permisos.edit');

    // Compensados
    Route::get('/compensados', \App\Livewire\Compensados\Index::class)->name('compensados.index');
    Route::get('/compensados/create', \App\Livewire\Compensados\Create::class)->name('compensados.create');
    Route::get('/compensados/show/{compensado}', \App\Livewire\Compensados\Show::class)->name('compensados.show');
    Route::get('/compensados/update/{compensado}', \App\Livewire\Compensados\Edit::class)->name('compensados.edit');





});
