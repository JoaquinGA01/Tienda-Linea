<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Inicio extends Controller
{
    //
    public function iniciar()
    {
        return view('index');
    }

    public function guardarUser(){
        $conn = mysqli_connect("localhost", "root", "", "chein");
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
