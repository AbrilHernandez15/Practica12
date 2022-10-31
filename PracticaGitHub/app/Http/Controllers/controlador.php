<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    function Formulario(){
        return view('formulario');
    }
    function Tabla(){
        return view('tabla');
    }
}
