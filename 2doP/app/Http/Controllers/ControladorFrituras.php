<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{

    public function formFrituras(){
        return view('formFrituras');
    }
    
    public function guardarFritura(Request $peticion){

        $peticion->validate([
            'txtFritura' => 'required',
            'txtSabor' => 'required',
            'txtPeso' => 'required'
        ]);
        
        $nombre = $peticion->input('txtFritura');

        session()->flash('mensaje', 'Almacenado en BD: '. $nombre);

        return to_route('formulario');
    }

}
