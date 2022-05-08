<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Carrito extends Controller
{

    public function cargarCarrito(){
        
    }

    function buscarproductos(){
        


        $emailUsuario = $_SESSION['usuario'];
        $idCarrito = \DB::table('producto')
                ->select('producto.*')
                ->where([ ['id','=',
                    \DB::table('usuario_producto')
                    ->select('usuario_producto.idProducto')
                    ->where('emailUsuario','=', $emailUsuario)
                    ->get()],
                
                ['Tipo','=','0']])
                ->get();

        $idapartados = \DB::table('producto')
                ->select('producto.*')
                ->where('id','=',
                    \DB::table('usuario_producto')
                    ->select('usuario_producto.idProducto')
                    ->where('emailUsuario','=', $emailUsuario)
                    ->get()
                )
                -where('Tipo','=', '1')
                ->get();
        return view('checkout')->with('Carrito',$Carrito)-with('Apartados', $apartados);
        //return view('checkout')->with('Carrito',$_SESSION['prductosApartado'])->with('Apartados',$_SESSION['prductosCarrito']);
    }
}
?>