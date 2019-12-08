@extends('layouts.admin-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Materia</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'admin.materias.store', 'method' => 'POST']) }}
          @include('admin.materias.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection