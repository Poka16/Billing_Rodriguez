<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::all();
        return view('producto.inicio', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre_producto'=>'required',
            'detalle_producto'=>'required',
            'precio'=>'required',
            
        ]);

        $producto = new Producto([
            'nombre_producto' => $request->get('nombre_producto'),
            'detalle_producto' => $request->get('detalle_producto'),
            'precio' => $request->get('precio'),
            
        ]);
        $producto->save();
        return redirect('/productos')->with('success', 'Producto Guardado Satisfactoriamente!');
   
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
        $producto = Producto::find ($id);
         
        return view('producto.modificar', compact('producto'));
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
        $request->validate([
            'nombre_producto'=>'required',
            'detalle_producto'=>'required',
            'precio'=>'required',
            
        ]);

    $producto = Producto::find($id);
        $producto->nombre_producto =  $request->get('nombre_producto');
        $producto->detalle_producto =  $request->get('detalle_producto');
        $producto->precio = $request->get('precio');
       
        $producto->save();

        return redirect('/productos')->with('success', 'Producto Modificado Satisfactoriamente!');
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
        $producto = Producto::find($id);
        $producto->delete();

        return redirect('/productos')->with('success', 'Producto Eliminado Satisfactoriamente!!');
    }
}
