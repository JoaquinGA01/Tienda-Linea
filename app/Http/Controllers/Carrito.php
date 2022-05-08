<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Carrito extends Controller
{

    public function cargarCarrito(){
        
    }

    function buscarproductos(){

        $idCarrito = \DB::table('usuario_producto')
                ->select('usuario_producto.*')
                ->where('emailUsuario', $_SESSION['usuario'])
                -where('Tipo', '0')
                ->get();

        
        $idapartados = \DB::table('usuario_producto')
                ->select('usuario_producto.*')
                ->where('emailUsuario', $_SESSION['usuario'])
                -where('Tipo', '1')
                ->get();
        return view('checkout')->with('Carrito',$Carrito)-with('Apartados', $apartados);
        //return view('checkout')->with('Carrito',$_SESSION['prductosApartado'])->with('Apartados',$_SESSION['prductosCarrito']);
    }
}
?>