<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Producto extends Controller
{
    public function iniciar(){
        return view('addProducto');
    }   

    public function addProducto(Request $request){
        //$conn = mysqli_connect("localhost", "root", "", "chein");
        $conn = mysqli_connect("localhost", "root", "", "tienda_linea");

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        


        $entrada = $request->all();
        if($archivo=$request->file('imagen')){
            $nombreA = $archivo->getClientOriginalName();
            $archivo->move('images',$nombreA);
            $entrada['ruta']=$nombreA;
        }

        if($conn){
            $sql = "INSERT INTO producto(nombre,descripcion, precio,ruta) VALUES ('$nombre', '$descripcion', '$precio','$nombreA')";
            if (mysqli_query($conn, $sql)) {
                echo "Registro guardado con exito";
            }else{                
                echo "Error: " . $sql . "<br>" . $conn->error;                  
            }
        }
        return view('addProducto');
    }
}
