@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ingresar Productos</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('productos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="nombre_producto">Nombre Producto:</label>
              <input type="text" class="form-control" name="nombre_producto"/>
          </div>
          <div class="form-group">    
              <label for="detalle_producto">Detalle Producto:</label>
              <input type="text" class="form-control" name="detalle_producto"/>
          </div>

          <div class="form-group">
              <label for="precio">Precio:</label>
              <input type="text" class="form-control" name="precio"/>
          </div>

         
          <button type="submit" class="btn btn-outline-warning">Insertar Producto</button>
      </form>
  </div>
</div>
</div>
@endsection