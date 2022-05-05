<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Carrito extends Controller
{

    public function cargarCarrito(){
        
    }

    function buscarproductos(){
        $_SESSION['prductosCarrito'] = array();
        $_SESSION['prductosApartado'] = array();
        $apartados = new \Ds\vector(); 
        foreach($_SESSION['idProductosCarrito'] as $prod){
            $productos = \DB::table('producto')
            ->select('producto.*')
            ->where('id', $prod)
            ->get();

        }
        return $apartados;
        return view('checkout')->with('Carrito',$apartados);
        foreach($_SESSION['idProductosApartados'] as $prod){
            $productos = \DB::table('producto')
            ->select('producto.*')
            ->where('id', $prod)
            ->get();
            array_push($_SESSION['prductosApartado'],$productos);
        }

        return $apartados;
        //return view('checkout')->with('Carrito',$_SESSION['prductosApartado'])->with('Apartados',$_SESSION['prductosCarrito']);
    }
}
?>