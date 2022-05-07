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
     public function store() {
        
         if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } 
        return redirect()->to('/inventario');
    }  


    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }

}
