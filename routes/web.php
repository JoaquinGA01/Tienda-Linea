<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','App\Http\Controllers\Inicio@iniciar');

Route::post('/guardarUser', 'App\Http\Controllers\Inicio@guardarUser');

Route::get('/camisas',function(){
    return view('camisas');    
});

Route::get('/pantalones',function(){
    return view('jeans');    
});


Route::get('/about',function(){
    return view('about');    
});

