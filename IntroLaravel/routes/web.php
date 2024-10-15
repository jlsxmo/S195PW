<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,'home'])->name('rutainicio');
Route::get('/formulario',[ControladorVistas::class,'formulario'])->name('rutaformulario');
Route::get('/clientes',[ControladorVistas::class,'consulta'])->name('rutaclientes');
Route::get('/componentes',[ControladorVistas::class,'componentes'])->name('rutacomponentes');

Route::post('/enviar',[ControladorVistas::class,'procesarCliente'])->name('procesar');






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