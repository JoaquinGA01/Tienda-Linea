<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Camisas extends Controller
{
    public function iniciar(){
        //https://laravel.com/docs/9.x/queries
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','camisa')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('camisas')->with('productos',$productos);
    }

}
