<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


//https://www.youtube.com/c/jcarlosad7/videos
class Inicio extends Controller
{
    //
    
    public function iniciar()
    {  
        if(isset($_POST['Email']) && isset($_POST['Password'])){
            $_SESSION['idProductosCarrito'] = array();
            $_SESSION['idProductosApartados'] = array();
            if(isset($_POST['Name'])){
                $conn = mysqli_connect("localhost", "root", "", "chein");
                //$conn = mysqli_connect("localhost", "root", "", "tienda_linea");
                $nombre = $_POST['Name'];
                $correo = $_POST['Email'];
                $password = $_POST['Password'];
                if($conn){
                    $sql = "INSERT INTO users(name, email, password) VALUES ('$nombre', '$correo', '$password')";
                    if (mysqli_query($conn, $sql)) {
                        return view('index')->with('nombre', $nombre);
                    }
            }
            return view('index');
            }else{
            $conn = mysqli_connect("localhost", "root", "", "chein");
            //$conn = mysqli_connect("localhost", "root", "", "tienda_linea");
            $correo = $_POST['Email'];
            $password = $_POST['Password'];
            if($conn){
                $sql = "SELECT * FROM users WHERE email='$correo' AND password='$password'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {         
                        $productos = buscarproductos();
                        return view('index')->with('nombre', $row["name"])->with('productos', $productos);
                    }
                    
                }
            }
            return view('index');
            }
        }else{
            $productos = buscarproductos();
            return view('index')->with('productos',$productos);        
        }
        
    }
    
    public function guardarCarrito(){
        if(isset($_POST['iD'])){
            $idProducto = $_POST['iD'];
            if(in_array($idProducto,$_SESSION['idProductosCarrito'])){
                return "2"; //ya existe el elemento
            }else{
                array_push($_SESSION['idProductosCarrito'],$idProducto);
                return "1"; // se Agrego con exito
            }

        }else{
            return "0"; //Error no se reconoce el Id
        }
        return "";
    }

    public function apartarProd(){
        if(isset($_POST['iD'])){
            $idProducto = $_POST['iD'];
            if(in_array($idProducto,$_SESSION['idProductosCarrito'])){
                $clave = array_search($_POST['iD'], $_SESSION['idProductosCarrito']);
                unset($_SESSION['idProductosCarrito'][$clave]);
                array_push($_SESSION['idProductosApartados'],$idProducto);
                return "2-1";//ya existe el elemento
            }else{
                if(in_array($idProducto,$_SESSION['idProductosApartados'])){
                    return "2";//ya existe el producto
                }else{
                    array_push($_SESSION['idProductosApartados'],$idProducto);
                    return "1"; // se Agrego con exito
                }
            }

        }else{
            return "0"; //Error no se reconoce el Id
        }
        return "";
    }

    

    public function eliminar(){
        //$conn = mysqli_connect("localhost", "root", "", "chein");
        $conn = mysqli_connect("localhost", "root", "", "tienda_linea");
        $nombreU = $_POST['nombreUser'];
        //$correo = $_POST['Email'];
        //$password = $_POST['Password'];
        if($conn){
            $sql = "DELETE FROM users WHERE name= '$nombreU' ";
            if (mysqli_query($conn, $sql)) {
                //return view('index')->with('nombre', $nombre);
                return view('index');
            }else{
                echo "Ha ocurrido un error";
            }
        }
        return view('index');
    }

}

function buscarproductos(){
    $productos = \DB::table('producto')
                ->select('producto.*')
                ->orderBy('id','DESC')
                ->get();
    return $productos;
}

