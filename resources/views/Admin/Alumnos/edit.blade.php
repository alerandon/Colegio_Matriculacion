@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Alumno</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($alumnos, ['route' => ['admin.alumnos.update', $alumnos->id], 'method' => 'PATCH']) }}
              @include('admin.alumnos.form')
            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
