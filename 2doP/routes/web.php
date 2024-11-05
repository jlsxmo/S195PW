<?php

use Illuminate\Support\Facades\Route;


 Route::get('/', function () {
    return view('formFrituras');
});

Route::post('/enviar', [ControladorFrituras::class, 'guardarFritura'])->name('guardar');