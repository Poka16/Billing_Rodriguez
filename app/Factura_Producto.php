<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura_Producto extends Model
{
    //
    protected $table ='factura_productos';

    protected $fillable=['factura_id','producto_id',];
    
   


}

