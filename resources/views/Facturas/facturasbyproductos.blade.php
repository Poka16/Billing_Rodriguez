@extends('base') 
@section('main')
<br>

<div class="justify-content-center">
    <h1 class="display-4">Facturas por Producto</h1>
</div>

    <div class="text-left">
    <a class="btn btn-success" href="/facturas"> Regresar</a>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>Detalle Factura</td>
          <td>Fecha de Compra</td>
          <td>ID Usuario</td>
          <td>ID Producto</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Producto</td>
          <td>Precio del Producto</td>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->detalle_factura}}</td>
            <td>{{$bill->created_at}}</td>
            <td>{{$bill->user_id}}</td>
            <td>{{$bill->producto_id}}</td>
            <td>{{$bill->nombre_producto}}</td>
            <td>{{$bill->detalle_producto}}</td>
            <td>{{$bill->precio}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
