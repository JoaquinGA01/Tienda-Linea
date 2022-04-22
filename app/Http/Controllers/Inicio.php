<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//https://www.youtube.com/c/jcarlosad7/videos
class Inicio extends Controller
{
    //
    public function iniciar()
    {
        $productos = \DB::table('producto')
                    ->select('producto.*')
                    ->orderBy('id','DESC')
                    ->get();
        
        return view('index')->with('productos',$productos);        
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
                
            }
        }
        return view('index');
    }
    
}
