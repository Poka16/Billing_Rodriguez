@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modificar Producto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('productos.update', $producto->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nombre_producto">Nombre Producto:</label>
                <input type="text" class="form-control" name="nombre_producto" value={{ $producto->nombre_producto }} />
            </div>

            <div class="form-group">
                   <label for="detalle_producto">Detalle Producto:</label>
                   <input type="text" class="form-control" name="detalle_producto" value={{ $producto->detalle_producto }} />
                   </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" name="precio" value={{ $producto->precio }} />
            </div>

           
            <button class="btn btn-outline-warning" type="submit" >Modificar</button>
        </form>
    </div>
</div>
@endsection