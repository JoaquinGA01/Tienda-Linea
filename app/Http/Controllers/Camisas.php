<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Camisas extends Controller
{
    public function iniciar(){
        
        $productos = \DB::table('producto')->select('producto.*')->orderBy('id','DESC')->get();
        
        return view('camisas')->with('productos',$productos);
    }

}
