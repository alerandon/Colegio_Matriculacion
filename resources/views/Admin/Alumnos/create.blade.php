@extends('layouts.admin-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Alumno</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'admin.alumnos.store', 'method' => 'POST']) }}
          @include('admin.alumnos.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection