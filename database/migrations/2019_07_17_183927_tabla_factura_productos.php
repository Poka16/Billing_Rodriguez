<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaFacturaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('factura_id')->unsigned();
            $table->foreign('factura_id')->references('id')->on('facturas')
            ->onDelete('cascade')
            ->onUpdate('cascade');;
            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');;

            $table->timestamps();

            //uno a muchos - de muchos a muchos
            //primero el controlador report controller
            //crear estas tres funciones
            //getBills
            //getBillsByUser
            //getBillsByProducto
            
            //crear las rutas
            //webphp
            //getBills

            //nueva vista facturar
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_productos');
    }
}
