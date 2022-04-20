<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pantalones extends Controller{

    public function iniciar(){
        //https://laravel.com/docs/9.x/queries
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','pantalon')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('pantalones')->with('productos',$productos);
    }

}
