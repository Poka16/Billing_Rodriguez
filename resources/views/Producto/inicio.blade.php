@extends('base')

@section('main')

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row">
<div class="col-sm-12">

<div class="text-center">
    <h1 class="display-3">Productos</h1> 
    <div >
    <div class="text-left">
      <a class="btn btn-outline-warning" href="/home"> Regresar a Home </a>
    </div>
    
    <div>
    <div class="text-right">
    <a style="margin: 19px;" href="{{ route('productos.create')}}" class="btn btn-warning">Nuevo Producto</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Producto</td>
          <td>Precio</td>
          
          <td colspan = 2></td>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre_producto}}</td>
            <td>{{$producto->detalle_producto}}</td>
            <td>{{$producto->precio}}</td>
            
            <td>
                <a href="{{ route('productos.edit',$producto->id)}}" class="btn btn-warning">Editar</a>
            </td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-warning" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection