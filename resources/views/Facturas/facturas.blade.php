@extends('base')

@section('main')
<br>
<div>
    <div class=" d-flex justify-content-center">
        <h1 class="display-4">Todas las Facturas</h1>
    </div>
</div>
    
    <div class="text-left">
        <a class="btn btn-success" href="/facturas">Regresar</a>
    </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          
          <td>Código del Producto</td>
          <td>ID Usuario</td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($data as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            
            <td>{{$bill->producto_id}}</td>
            <td>{{$bill->user_id}}</td>
            <td>{{$bill->precio_total}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection