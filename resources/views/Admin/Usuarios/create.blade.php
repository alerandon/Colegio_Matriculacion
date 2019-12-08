@extends('layouts.admin-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Usuario</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'admin.usuarios.store', 'method' => 'POST']) }}
          @include('admin.usuarios.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection