@extends('layouts.prof-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Inscribir Alumno</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'prof.listas_alumnos.store', 'method' => 'POST']) }}
          @include('prof.listas_alumnos.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection