<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

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
    public function procesarCliente(validadorCliente $peticion)
    {   
        //redirección con mensaje en sesión
        $usuario = $peticion->input('txtNombre');
        session()->flash('exito', 'El usuario ha sido registrado con éxito'.$usuario);

        return to_route('rutaformulario');

        // redirección usan la ruta
        // return redirect('/');

        // redireccion con nombre de ruta
        // return redirect() -> route('rutaclientes');

        //redirección al origen de la petición
        //return back();

        // redirección con valores
        //$id = ['usuario'=>1, 'usuario'=>2];

        //return view('formulario', compact('id'));
    }

}