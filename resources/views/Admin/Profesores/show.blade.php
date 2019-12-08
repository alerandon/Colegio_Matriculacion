@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Profesor</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo: </strong>
            {{ $profesores->cod_profesor }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>C.I. </strong>
                  {{ $profesores->cedula_identidad }}
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Nombres </strong>
                  {{ $profesores->nombres }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Apellidos </strong>
                  {{ $profesores->apellidos }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Fecha de Nacimiento </strong>
                  {{ $profesores->fecha_nacimiento }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Lugar de Nacimiento </strong>
                  {{ $profesores->lugar_nacimiento }}
              </div>
            </div>
          </div>
          <br>

          <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <strong>Correo electronico: </strong>
                    {{ $profesores->email }}
                </div>
              </div>
            </div>

            <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('admin.profesores.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection