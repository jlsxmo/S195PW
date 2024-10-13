<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;


Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');
Route::get('/formulario', [ControladorVistas::class, 'formulario'])->name('rutaformulario');
Route::get('/clientes', [ControladorVistas::class, 'consulta'])->name('rutaclientes');
Route::get('/componentes', [ControladorVistas::class, 'componentes'])->name('rutaComponentes');


/* Manejo antiguo de vistas
Route::get('/', function () {
     return view('welcome');
});
*/

/* Manejo de vistas
Route::view('/','inicio')->name('rutainicio');
Route::view('/formulario','formulario')->name('rutaformulario');
Route::view('/clientes', 'clientes')->name('rutaclientes');
Route::view('/componentes', 'componentes')->name('rutaComponentes');
 */