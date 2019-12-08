@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Materia</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($materias, ['route' => ['admin.materias.update', $materias->id], 'method' => 'PATCH']) }}

              @include('admin.materias.form')

            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
