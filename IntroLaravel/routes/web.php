<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/* Rutas de ClienteController */
Route::get('/',[clienteController::class, 'home'])->name('rutainicio');
Route::get('/cliente/create',[clienteController::class, 'create'])->name('rutaformulario');
Route::post('/cliente',[clienteController::class,'store'])->name('procesar');
Route::get('/cliente',[clienteController::class,'index'])->name('rutaclientes');





//MANEJO ANTIGUO DE VISTAS
/*  Route::get('/', function () {
    return view('componentes');
});
 */


/*  shit + alt + a
Route::view('/','inicio',)->name('rutainicio'); 

Route::view('/formulario','formulario')->name('rutaformulario'); 

Route::view('/clientes','clientes')->name('rutaclientes');

Route::view('/componentes','componentes')->name('rutacomponentes');
*/