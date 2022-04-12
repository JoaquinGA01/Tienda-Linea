<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Producto extends Controller
{
    public function iniciar(){
        return view('addProducto');
    }   

    public function addProducto(){
        //$conn = mysqli_connect("localhost", "root", "", "chein");
        $conn = mysqli_connect("localhost", "root", "", "tienda_linea");

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        

        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if($check === false){
            $unidad_err = "Por favor ingresa una imagen.";
        }else{
            $image = $_FILES['imagen']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
        }

        if($conn){
            $sql = "INSERT INTO producto(nombre,descripcion, precio,imagen) VALUES ('$nombre', '$descripcion', '$precio','$imgContent')";
            if (mysqli_query($conn, $sql)) {
                echo "Registro guardado con exito";
            }else{                
                echo "Error: " . $sql . "<br>" . $conn->error;                  
            }
        }
        return view('addProducto');
    }
}
