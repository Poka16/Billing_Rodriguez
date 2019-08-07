<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

   
    //
    protected $fillable=[
        'user_id',
        'detalle_factura',
        'precio_total'   
    ];

}

