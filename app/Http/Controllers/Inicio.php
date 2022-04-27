<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//https://www.youtube.com/c/jcarlosad7/videos
class Inicio extends Controller
{
    //
    
    public function iniciar()
    {  
        $productos = buscarproductos();
        return view('index')->with('productos',$productos);        
    }


    public function cerrarSesion(){
        return view("index");
    }

    public function guardarUser(){
        //$conn = mysqli_connect("localhost", "root", "", "chein");
        $conn = mysqli_connect("localhost", "root", "", "tienda_linea");
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
    }

    public function SesionIniciada(){
        //$conn = mysqli_connect("localhost", "root", "", "chein");
        $conn = mysqli_connect("localhost", "root", "", "tienda_linea");
        $correo = $_POST['Email'];
        $password = $_POST['Password'];
        if($conn){
            $sql = "SELECT * FROM users WHERE email='$correo' AND password='$password'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    session_id($row["id"]);
                    session_start();            
                    $productos = buscarproductos();
                    return view('index')->with('nombre', $row["name"])->with('productos', $productos);
                }
                
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