@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Representante</h2>
      </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12">
          <div class="form-group">
            <strong>Codigo de Representante: </strong>
              {{ $representantes->cod_representante }}
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo de Alumno: </strong>
            {{ $representantes->cod_alumno }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>C.I. </strong>
                  {{ $representantes->cedula_identidad }}
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Nombres </strong>
                  {{ $representantes->nombres }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Apellidos </strong>
                  {{ $representantes->apellidos }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Fecha de Nacimiento </strong>
                  {{ $representantes->fecha_nacimiento }}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Lugar de Nacimiento </strong>
                  {{ $representantes->lugar_nacimiento }}
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <strong>Correo: </strong>
                    {{ $representantes->correo }}
                </div>
              </div>
            </div>

          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('admin.representantes.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection