<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blusas extends Controller{
    
    public function iniciar(){
        if(isset($_POST['Email']) && isset($_POST['Password'])){
            ;
            if(isset($_POST['Name'])){
                $conn = mysqli_connect("localhost", "root", "", "chein");
                $nombre = $_POST['Name'];
                $correo = $_POST['Email'];
                $password = $_POST['Password'];
                if($conn){
                    $sql = "INSERT INTO users(name, email, password) VALUES ('$nombre', '$correo', '$password')";
                    if (mysqli_query($conn, $sql)) {
                        return view('blusas')->with('nombre', $nombre);
                    }
            }
            return view('blusas');
            }else{
            $conn = mysqli_connect("localhost", "root", "", "chein");
            $correo = $_POST['Email'];
            $password = $_POST['Password'];
            if($conn){
                $sql = "SELECT * FROM users WHERE email='$correo' AND password='$password'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {         
                        $_SESSION['usuario'] = $row["id"];
                        $productos = buscarproductos();
                        return view('blusas')->with('nombre', $row["name"])->with('email', $row["id"] )->with('productos', $productos);
                    }
                    
                }
            }         
            return view('blusas');
            }
        }else{
            $productos = buscarproductos();
            return view('blusas')->with('productos',$productos);        
        }
        
    }    

    public function guardarCarrito(){
        if(isset($_POST['iD']) ){
            $idProducto = $_POST['iD'];
            $emailUsuario = $_SESSION['usuario'] ;
            return consulta(1,0, $idProducto, $emailUsuario);
        }else{
            return '0';
        }
    }

    public function apartarProd(){
        if(isset($_POST['iD']) ){
            $idProducto = $_POST['iD'];
            $emailUsuario = $_SESSION['usuario'];
            return consulta(0,1, $idProducto, $emailUsuario);
        }else{
            return '0';
        }
    }


}


function buscarproductos(){
    $productos = \DB::table('producto')
    ->select('producto.*')
    ->where('categoria','Blusas')
    ->orderBy('id','DESC')
    ->get();
    return $productos;
}

function consulta($tipo1, $tipo2, $idProducto, $emailUsuario){
    $id =$idProducto . $emailUsuario; 
    $conn = mysqli_connect("localhost", "root", "", "chein");
        if($conn){
            $sql1 = $conn->query("SELECT * FROM usuario_producto WHERE idProducto = '$idProducto' AND emailUsuario = '$emailUsuario' AND Tipo = '$tipo1';" );
            if (mysqli_num_rows($sql1) == 0) {
                $sql1 = $conn->query("SELECT * FROM usuario_producto WHERE idProducto = '$idProducto' AND emailUsuario = '$emailUsuario' AND Tipo = '$tipo2';" );
                if (mysqli_num_rows($sql1) == 0) {
                    $sql = "INSERT INTO usuario_producto(id,idProducto, emailUsuario, Tipo, Cantidad) VALUES ('$id','$idProducto', '$emailUsuario', '0','1' )";
                    if (mysqli_query($conn, $sql)) {
                        return '1';
                    }else{
                        return '2';
                    }
                }else{
                    $sql2 = "SELECT Cantidad FROM usuario_producto WHERE idProducto = '$idProducto' AND emailUsuario = '$emailUsuario' AND Tipo = '$tipo2';";
                    $result = mysqli_query($conn,$sql2);
                    $row = $result->fetch_assoc();
                    $cantidad = $row['Cantidad'] +1;
                    $sql = "UPDATE usuario_producto SET Cantidad = $cantidad WHERE idProducto = '$idProducto' AND emailUsuario = '$emailUsuario' AND Tipo = '$tipo2'";
                    if (mysqli_query($conn, $sql)) {
                        return '3';
                    }else{
                        return '0';
                    }
                }
            }else{
                $sql = "UPDATE usuario_producto SET Tipo = '$tipo2' WHERE idProducto = '$idProducto' AND emailUsuario = '$emailUsuario'";
                if (mysqli_query($conn, $sql)) {
                    return '3';
                }else{
                    return '0';
                }
            }
        }
}    

