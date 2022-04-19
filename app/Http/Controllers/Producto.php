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
        $categoria = $_POST['categoria'];
        $stock = $_POST['stock'];


        $entrada = $request->all();
        if($archivo=$request->file('imagen')){
            $nombreA = $archivo->getClientOriginalName();
            $archivo->move('images',$nombreA);
            $entrada['ruta']=$nombreA;
        }

        if($conn){
            $sql = "INSERT INTO producto(nombre,categoria,descripcion, precio,stock,ruta) VALUES ('$nombre','$categoria' ,'$descripcion', '$precio','$stock','$nombreA')";
            if (mysqli_query($conn, $sql)) {
                echo "<h3>Registro guardado con exito</h3>";
            }else{                
                echo "Error: " . $sql . "<br>" . $conn->error;                  
            }
        }
        return view('addProducto');
    }
}
