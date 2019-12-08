@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Usuario</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Nombre de usuario: </strong>
            {{ $user->name }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Correo electrónico: </strong>
                  {{ $user->email }}
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Contraseña: </strong>
                  {{ $user->password }}
              </div>
            </div>
          </div>

          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('admin.usuarios.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection