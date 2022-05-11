<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Playeras extends Controller{
    
    public function iniciar(){
        
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','Playera')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('playeras')->with('productos',$productos);
    }    


}
