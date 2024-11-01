<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'inicio']) -> name('rutaInicio');
Route::get('/principal', [controladorVistas::class, 'principal']) -> name('rutaPrincipal');
Route::get('/formulario', [controladorVistas::class, 'formulario']) -> name('rutaFormulario');
