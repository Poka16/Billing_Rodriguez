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
    <h1 class="display-3">Usuarios</h1>    
    <div>
    <div >
    <div class="text-left">
      <a class="btn btn-outline-primary" href="/home"> Regresar a Home </a>
    </div>

    
    </div> 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre de Usuario</td>
          <td>Correo Electronico</td>
          <td>Contraseña</td>
        
          
          <td colspan = 2></td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}} </td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            
            
            <td>
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-primary" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection