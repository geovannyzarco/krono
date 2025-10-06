<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::middleware(['auth'])->group(function () {
    Route::get('/grupos', \App\Livewire\Grupos\Index::class)->name('grupos.index');
    Route::get('/grupos/create', \App\Livewire\Grupos\Create::class)->name('grupos.create');
    Route::get('/grupos/show/{grupo}', \App\Livewire\Grupos\Show::class)->name('grupos.show');
    Route::get('/grupos/update/{grupo}', \App\Livewire\Grupos\Edit::class)->name('grupos.edit');

});
