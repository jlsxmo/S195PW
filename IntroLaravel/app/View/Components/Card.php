<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $titulo;
    public $encabezado;
    public $textoBoton;

    public function __construct($titulo, $encabezado, $textoBoton)
    {
        $this->titulo=$titulo;        
        $this->encabezado=$encabezado;        
        $this->textoBoton=$textoBoton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
