<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

use Illuminate\Support\Facades\DB;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $texto=trim($request->get('texto'));
        $promociones=DB::table('promociones')
        ->select('id', 'nombre', 'stock', 'categoria', 'descripcion', 'precio', 'promocion', 'ruta')
        ->where('nombre', 'LIKE', '%'.$texto.'%')
        ->orderBy('nombre', 'asc')
        ->paginate(10);
        return view('promo.promo', compact('promociones', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo;
        $promo->nombre=$request->input('nombre');
        $promo->stock=$request->input('stock');
        $promo->categoria=$request->input('categoria');
        $promo->descripcion=$request->input('descripcion');
        $promo->precio=$request->input('precio');
        $promo->promocion=$request->input('promocion');
        $promo->ruta=$request->input('ruta');
        $promo->save();
        return redirect()->route('promociones.index');
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
        $promo=Promo::findOrFail($id);
        return view('promo.edit',compact('promo'));
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
        $promo=Promo::findOrFail($id);
        $promo->nombre=$request->input('nombre');
        $promo->stock=$request->input('stock');
        $promo->categoria=$request->input('categoria');
        $promo->descripcion=$request->input('descripcion');
        $promo->precio=$request->input('precio');
        $promo->promocion=$request->input('promocion');
        $promo->ruta=$request->input('ruta');
        $promo->save();
        return redirect()->route('promociones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo=Promo::findOrFail($id);
        $promo->delete();
        return redirect()->route('promociones.index');
    }
}
