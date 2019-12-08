@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

      <div class="row">
          <div class="col">
              <h2>Editar Periodo escolar</h2>
          </div>
        </div>
        <br>

      <div class="row">
          <div class="col">

            {{ Form::model($años_escolares, ['route' => ['admin.años_escolares.update', $años_escolares->id], 'method' => 'PATCH']) }}

              @include('admin.años_escolares.form')

            {{ Form::close() }}
          
          </div>
      </div>
  </div>

@endsection
