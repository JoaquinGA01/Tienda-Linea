<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Inicio extends Controller
{

    public function cargarCarrito(){
        
    }

    function buscarproductos(){
        $_SESSION['prductosCarrito'] = array();
        $_SESSION['prductosApartado'] = array();
        foreach($_SESSION['idProductosCarrito'] as $prod){
            $productos = \DB::table('producto')
            ->select('producto.*')
            ->where('id', $prod)
            ->get();
            array_push($_SESSION['prductosCarrito'],$productos);
        }
        foreach($_SESSION['idProductosApartados'] as $prod){
            $productos = \DB::table('producto')
            ->select('producto.*')
            ->where('id', $prod)
            ->get();
            array_push($_SESSION['prductosApartado'],$productos);
        }
        $apartados = $_SESSION['prductosApartado'];
        $carrito = $_SESSION['prductosCarrito'];

        return view('checkout')->with('Carrito',$carrito)->with('Apartados',$apartados);
    }
}
?>