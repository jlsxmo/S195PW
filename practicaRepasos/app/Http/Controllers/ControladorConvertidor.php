<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorConvertidor extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    public function repaso1()
    {
        return view('repaso1');
    }
}
