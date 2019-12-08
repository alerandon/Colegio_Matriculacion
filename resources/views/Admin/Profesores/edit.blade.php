@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Profesor</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($profesores, ['route' => ['admin.profesores.update', $profesores->id], 'method' => 'PATCH']) }}

              @include('admin.profesores.form')

            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
