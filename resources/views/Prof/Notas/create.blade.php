@extends('layouts.prof-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Asignar notas</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'prof.notas.store', 'method' => 'POST']) }}
          @include('prof.notas.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection