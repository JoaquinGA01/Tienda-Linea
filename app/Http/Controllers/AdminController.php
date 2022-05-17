<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class AdminController extends Controller{
    
    public function create(){
        return view('loginAdmin');
    }
    //HASHEO DE PASSWORD
    //https://phppasswordhash.com/
    //https://youtu.be/DqWXEiyp22E
    //pablo@gmail.com/123456789
    //pablo@gmail.com/$2y$10$VHpRQh2rUuDO21qDK44SnOPd/RuRE/ezaFHWDAtw79uJVKQoXMkQO
     public function store() {
        
         if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o contraseña ingresado son incorrectos, por favor intentalo nuevamente. ',
            ]);

        } 
        return redirect()->to('/inventario');
    }  


    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }

}
