<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class controladorVistas extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function principal(){
        return view('principal');
    }

    public function formulario(){
        return view('formulario');
    }

    public function registrarLibro(validadorLibro $peticion){
    // Si la validación es correcta, indicamos el libro que se está registrando
       $nombreLibro = $peticion->input('titulo');

    // Con session enviamos un mensaje diciendo que el libro se ha guardado correctamente
       session()->flash('mensaje', 'Todo correcto: Libro "'.$nombreLibro.'" guardado');

    // Redirigimos al formulario
       return to_route('rutaFormulario');
    }
}
