<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    //
    public function getBills(){

        $data = DB::table('factura_productos')
        ->join('facturas', 'factura_productos.factura_id', '=', 'facturas.id')
        ->select('factura_productos.*', 'facturas.*')
        ->get();
        //return $databills;
     return view('facturas.facturas', compact('data'));


    }

    public function getBillsByUser(){
        $data = DB::table('facturas')
        ->join('users', 'facturas.user_id', '=', 'users.id') 
        ->select('users.*', 'facturas.*')
        ->get();
       // return $datauser;
      return view('facturas.facturabyuser', compact('data'));

    }

    public function getBillsByProduct(){

        $data = DB::table('factura_productos')
        ->join('facturas', 'factura_productos.factura_id', '=', 'facturas.id')
        ->join('productos', 'factura_productos.producto_id', '=', 'productos.id')
        ->select('factura_productos.*', 'facturas.*', 'productos.*')
        ->get();
  // return $dataproducto;
 return view('facturas.facturasbyproductos', compact('data'));

        
    }
    
}
