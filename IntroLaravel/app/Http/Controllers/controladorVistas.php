<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    public function formulario()
    {
        return view('formulario');
    }
    public function consulta()
    {
        return view('clientes');
    }
    public function procesarCliente(Request $peticion)
    {
        //return 'Llego tu formulario al controlador';
        
        //Imprimimos todo lo que viene en la peticion
        //return $peticion->all();

        //Devuelve la ruta de la petición
        //return $peticion->path();

        //Imprime la url completa de la peticion
        //return $peticion->url();

        //Muestra la ip origen de la peticion
        //return $peticion->ip();
    }

}