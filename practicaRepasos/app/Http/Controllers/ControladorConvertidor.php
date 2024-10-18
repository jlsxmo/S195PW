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
    public function convertir(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $unidad = $request->input('unidad');
        $resultado = '';

        switch ($unidad) {
            case 'MB-GB':
                $resultado = $cantidad / 1024 . ' GB';
                break;
            case 'GB-MB':
                $resultado = $cantidad * 1024 . ' MB';
                break;
            case 'GB-TB':
                $resultado = $cantidad / 1024 . ' TB';
                break;
            case 'TB-GB':
                $resultado = $cantidad * 1024 . ' GB';
                break;
        }

        return back()->with('resultado', $resultado);
    }
}
