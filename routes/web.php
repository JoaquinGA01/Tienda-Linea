<?php
session_start();
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

use App\Http\Controllers\AdminController;

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
Route::post('/','App\Http\Controllers\Inicio@iniciar');

Route::post('/eliminar', 'App\Http\Controllers\Inicio@eliminar');
Route::post('/agregarCarrito', 'App\Http\Controllers\Inicio@guardarCarrito');
Route::post('/apartarProd', 'App\Http\Controllers\Inicio@apartarProd');
Route::get('/camisas','App\Http\Controllers\Camisas@iniciar');

//Route::get("/carrito",function(){     return view("checkout"); });

Route::get("/carrito", 'App\Http\Controllers\Carrito@buscarproductos');

Route::get('/pantalones','App\Http\Controllers\Pantalones@iniciar');


Route::get('/about',function(){
    return view('about');    
});

Route::get('footer',function(){
    return view('footer');    
});

Route::get('head',function(){
    return view('head');    
});

Route::get('header',function(){
    return view('header');    
});


/* 
Route::get('/addProducto','App\Http\Controllers\Producto@iniciar');
Route::post('/addProducto','App\Http\Controllers\Producto@addProducto');
 */
Route::resource('/inventario',ProductoController::class);

Route::get('/perfil',function(){
    return view('perfil');    
});

Route::get('/admin', [AdminController::class, 'create'])
    ->name('admin.index');

Route::post('/admin', [AdminController::class, 'store'])
        ->name('admin.store');    

//Route::post('/admin', 'App\Http\Controllers\AdminController@store');
