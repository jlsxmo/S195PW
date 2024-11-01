<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
