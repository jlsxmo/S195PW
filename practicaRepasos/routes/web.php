<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorConvertidor;

Route::get('/', [ControladorConvertidor::class, 'home'])->name('rutainicio');
Route::get('/repaso1', [ControladorConvertidor::class, 'repaso1'])->name('rutarepaso1');