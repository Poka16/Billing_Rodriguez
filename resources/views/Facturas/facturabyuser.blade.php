@extends('base')

@section('main')

<br>
<div class="d-flex justify-content-center">
    <h1 class="display-4">Facturas por Usuarios</h1>
</div>

<div class="text-left">
    <a class="btn btn-success" href="/facturas">Regresar</a>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>Correo de Usuario</td>
          <td>Nombre del Usuario</td>
          <td>ID Usuario</td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($data as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->email}}</td>
            <td>{{$bill->name}}</td>
            <td>{{$bill->user_id}}</td>
            <td>{{$bill->precio_total}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
