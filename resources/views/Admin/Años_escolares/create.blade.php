@extends('layouts.admin-navbar')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <h2>Agregar Periodo escolar</h2>
        </div>
      </div>
      <br>

  <div class="row">
    <div class="col">

        {{ Form::open(['route'=>'admin.años_escolares.store', 'method' => 'POST']) }}
          @include('admin.años_escolares.form')
        {{ Form::close() }}

    </div>
  </div>

</div>

@endsection