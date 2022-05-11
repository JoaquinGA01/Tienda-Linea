<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantalonesC extends Controller{

    public function iniciar(){
        //https://laravel.com/docs/9.x/queries
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','PantalonesC')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('pantalonesCaballeros')->with('productos',$productos);
    }

}
