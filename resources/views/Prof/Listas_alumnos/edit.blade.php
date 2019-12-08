@extends('layouts.prof-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Alumno inscrito</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($listas_alumnos, ['route' => ['prof.listas_alumnos.update', $listas_alumnos->id], 'method' => 'PATCH']) }}

              @include('prof.listas_alumnos.form')

            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
