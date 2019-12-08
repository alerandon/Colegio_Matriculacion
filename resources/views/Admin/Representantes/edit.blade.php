@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Representante</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($representantes, ['route' => ['admin.representantes.update', $representantes->id], 'method' => 'PATCH']) }}
              @include('admin.representantes.form')
            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
