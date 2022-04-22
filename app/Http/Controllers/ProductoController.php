<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $texto=trim($request->get('texto'));        
        $productos=DB::table('producto')
                  ->select('id','nombre','categoria','descripcion','precio','stock','ruta')
                  ->where('nombre','LIKE','%'.$texto.'%')
                  ->orWhere('categoria','LIKE','%'.$texto.'%')
                  ->orWhere('descripcion','LIKE','%'.$texto.'%')
                  ->orWhere('precio','LIKE','%'.$texto.'%')
                  ->orWhere('stock','LIKE','%'.$texto.'%')
                  ->orderBy('id','asc')
                  ->paginate(10);                  
        return view('productos',compact('productos','texto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view ('addProducto');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $entrada = $request->all();
        if($archivo=$request->file('imagen')){
            $nombreA = $archivo->getClientOriginalName();
            $archivo->move('images',$nombreA);
            $entrada['ruta']=$nombreA;
        }


        $producto = new Producto;
        $producto->nombre=$request->input('nombre');
        $producto->categoria=$request->input('categoria');
        $producto->descripcion=$request->input('descripcion');
        $producto->precio=$request->input('precio');
        $producto->stock=$request->input('stock');
        $producto->ruta=$nombreA;
        $producto->save();
        return redirect()->route('inventario.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
