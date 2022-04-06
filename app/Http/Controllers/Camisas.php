<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Camisas extends Controller
{
    public function iniciar()
    {
        return view('camisas');
    }

}
