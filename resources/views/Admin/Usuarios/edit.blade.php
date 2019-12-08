@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Usuario</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($user, ['route' => ['admin.usuarios.update', $user->id], 'method' => 'PATCH']) }}
              @include('admin.usuarios.form')
            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
