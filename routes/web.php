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

//Route::get('/camisas','App\Http\Controllers\Camisas@iniciar');
//Route::get('/playeras','App\Http\Controllers\Playeras@iniciar');
Route::get('/camisas','App\Http\Controllers\Prendas@camisas');
Route::get('/playeras','App\Http\Controllers\Prendas@playeras');

Route::get('/vestidos','App\Http\Controllers\Vestidos@iniciar');
Route::get('/blusas','App\Http\Controllers\Blusas@iniciar');


//Route::get("/carrito",function(){     return view("checkout"); });

Route::get("/carrito", 'App\Http\Controllers\Carrito@buscarproductos');

//Route::get('/pantalones','App\Http\Controllers\PantalonesC@iniciar');
Route::get('/pantalones','App\Http\Controllers\Prendas@pantalonesCaballeros');


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
Route::resource('/inventario',ProductoController::class)->middleware('auth');

Route::get('/perfil',function(){
    return view('perfil');    
});

Route::get('/admin', [AdminController::class, 'create'])
    ->middleware('guest')
    ->name('admin.index');

Route::post('/admin', [AdminController::class, 'store'])
        ->name('admin.store');    

Route::get('/logout', [AdminController::class, 'destroy'])
        ->middleware('auth')
        ->name('admin.destroy');    

