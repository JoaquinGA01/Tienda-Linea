<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    //
    public function iniciar()
    {
        return view('index');
    }

    public function guardarUser(){
        return view('index');
    }
}
