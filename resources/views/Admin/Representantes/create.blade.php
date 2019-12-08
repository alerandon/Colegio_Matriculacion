@extends('layouts.admin-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Representante</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'admin.representantes.store', 'method' => 'POST']) }}
          @include('admin.representantes.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection