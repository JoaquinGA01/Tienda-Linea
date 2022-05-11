<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vestidos extends Controller{
    
    public function iniciar(){
        
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->where('categoria','Vestidos')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('vestidos')->with('productos',$productos);
    }     

}
