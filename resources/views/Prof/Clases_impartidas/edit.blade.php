@extends('layouts.prof-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Clase</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($clases_impartidas, ['route' => ['prof.clases_impartidas.update', $clases_impartidas->id], 'method' => 'PATCH']) }}

              @include('prof.clases_impartidas.form')

            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
