@extends('layouts.admin-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Profesor</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'admin.profesores.store', 'method' => 'POST']) }}
          @include('admin.profesores.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection