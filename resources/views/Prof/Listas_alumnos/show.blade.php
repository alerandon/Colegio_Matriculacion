@extends('layouts.prof-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Alumno inscrito</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo de lista: </strong>
            {{ $listas_alumnos->cod_lista }}
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo de profesor: </strong>
            {{ $listas_alumnos->cod_profesor }}
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo de clase: </strong>
            {{ $listas_alumnos->cod_clase }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Codigo de alumno: </strong>
                  {{ $listas_alumnos->cod_alumno }}
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <strong>Cedula de identidad: </strong>
                    {{ $listas_alumnos->cedula_identidad }}
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <strong>Nombres: </strong>
                      {{ $listas_alumnos->nombres }}
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <strong>Apellidos: </strong>
                        {{ $listas_alumnos->apellidos }}
                    </div>
                  </div>
                </div>

          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('prof.listas_alumnos.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection