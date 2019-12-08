@extends('layouts.prof-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Notas</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($notas, ['route' => ['prof.notas.update', $notas->id], 'method' => 'PATCH']) }}

              @include('prof.notas.form')

            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
