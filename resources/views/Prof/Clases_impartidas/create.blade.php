@extends('layouts.prof-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Clase</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'prof.clases_impartidas.store', 'method' => 'POST']) }}
          @include('prof.clases_impartidas.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection