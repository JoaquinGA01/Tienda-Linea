<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prendas extends Controller{

                                   /* PRENDAS DE HOMBRE */
    
    //CAMISAS
    public function camisas(){
        //https://laravel.com/docs/9.x/queries
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','camisa')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('camisas')->with('productos',$productos);
    }
    //PANTALONES CABALLEROS
    public function pantalonesCaballeros(){
        //https://laravel.com/docs/9.x/queries
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','PantalonesC')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('pantalonesCaballeros')->with('productos',$productos);
    }
    //PLAYERAS HOMBRES
    public function playeras(){
        
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','Playera')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('playeras')->with('productos',$productos);
    }      

                                    /* PRENDAS DE MUJER */

    
}
