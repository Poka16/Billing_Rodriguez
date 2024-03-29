@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modificar Usuario</h1>

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
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Nombre de Usuario:</label>
                <input type="text" class="form-control" name="name" value={{ $user->name }} />
            </div>

            

            <div class="form-group">
                <label for="email">Correo Electronico:</label>
                <input type="text" class="form-control" name="email" value={{ $user->email }} />
                </div>

            <div class="form-group">
                <label for="password">Contrasena:</label>
                <input type="text" class="form-control" name="password" value={{ $user->password }} />
                </div>

              

            <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>
    </div>
</div>
@endsection