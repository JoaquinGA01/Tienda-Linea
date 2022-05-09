<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class Carrito extends Controller
{

    public function cargarCarrito(){
        
    }

    function buscarproductos(){
        
        $emailUsuario = $_SESSION['usuario'];

        $tablaunion1 = DB::table('usuario_producto')
        ->select('usuario_producto.*')
        ->where('emailUsuario','=',$emailUsuario)
        ->where('Tipo','=', '0')
        ->get();

        foreach($tablaunion1 as $tabla){
            $Carrito = DB::table('producto')
            ->select('producto.*')
            ->where('id','=',$tabla->idProducto)
            ->get();
        }
       

        $tablaunion2 = DB::table('usuario_producto')
        ->select('usuario_producto.*')
        ->where('emailUsuario','=',$emailUsuario)
        ->where('Tipo','=', '1')
        ->get();

        foreach($tablaunion2 as $tabla){
            $apartados = DB::table('producto')
            ->select('producto.*')
            ->where('id','=',$tabla->idProducto)
            ->get();
        }
        
        //SELECT T1.* FROM producto=T1, usuario_producto=T2 WHERE T1.id = T2.idProducto AND T2.emailUsuario=1;
        
        
        return view('checkout')->with('Carrito',$Carrito)->with('Apartados', $apartados)->with('CatidadesC', $tablaunion1)->with('CatidadesA', $tablaunion2);
        //return view('checkout')->with('Carrito',$_SESSION['prductosApartado'])->with('Apartados',$_SESSION['prductosCarrito']);
    }
}
?>