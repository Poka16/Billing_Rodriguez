@extends('base')

@section('main')

<div>
    <br>
    <h1 class="d-flex justify-content-center display-3"> Facturación</h1>
</div>
<hr>
<div class="text-center">
    <br>
    <div class=" justify-content-center">
        <a href="datafacturas" class="btn btn-success btn-lg">Facturas</a>
        <a href="datauser" class="btn btn-success btn-lg">Facturas por Usuarios</a>
        <a href="dataproducto" class="btn btn-success btn-lg">Facturas por Producto</a>

        <div class="text-left">
        <div>
        <a href="/home" class="btn btn-outline-success">Volver al Inicio</a>
        </div>
        </div>
    </div>
    
</div>
<br>
<br>
<br>



@endsection
