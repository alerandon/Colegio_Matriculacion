@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Alumno</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo: </strong>
            {{ $alumnos->cod_alumno }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>C.I. </strong>
                  {{ $alumnos->cedula_identidad }}
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Nombres </strong>
                  {{ $alumnos->nombres }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Apellidos </strong>
                  {{ $alumnos->apellidos }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Fecha de Nacimiento </strong>
                  {{ $alumnos->fecha_nacimiento }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Lugar de Nacimiento </strong>
                  {{ $alumnos->lugar_nacimiento }}
              </div>
            </div>
          </div>
          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('admin.alumnos.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection