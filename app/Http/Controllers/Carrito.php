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

        $sql1 = "SELECT T1.*, T2.Cantidad FROM producto=T1, usuario_producto=T2 WHERE T1.id = T2.idProducto AND T2.emailUsuario='$emailUsuario' AND T2.Tipo='0'";
        $sql2 = "SELECT T1.*, T2.Cantidad FROM producto=T1, usuario_producto=T2 WHERE T1.id = T2.idProducto AND T2.emailUsuario='$emailUsuario' AND T2.Tipo='1'";
        $Carrito = DB::select($sql1);
        $apartados = DB::select($sql2);


        $tablaunion1 = DB::table('usuario_producto')
        ->select('usuario_producto.*')
        ->where('emailUsuario','=',$emailUsuario)
        ->where('Tipo','=', '0')
        ->get();

        $tablaunion2 = DB::table('usuario_producto')
        ->select('usuario_producto.*')
        ->where('emailUsuario','=',$emailUsuario)
        ->where('Tipo','=', '1')
        ->get();
    
        return view('checkout')->with('Carrito',$Carrito)->with('Apartados', $apartados)->with('CatidadesC', $tablaunion1)->with('CatidadesA', $tablaunion2);
    }
}
?>