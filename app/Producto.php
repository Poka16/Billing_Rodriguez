<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    //
   
    protected $fillable=[
            'nombre_producto',
            'detalle_producto',
            'precio',
    ];

}
