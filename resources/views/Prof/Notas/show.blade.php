@extends('layouts.prof-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Notas de lapso</h2>
      </div>
    </div>
    <br>

    <div class="row">
        <div class="col-6">
          <div class="form-group">
            <h4><strong>Datos personales: </strong></h4>
          </div>
        </div>

        <div class="col-6">
            <div class="form-group">
              <h4><strong>Notas: </strong></h4>
            </div>
          </div>

      </div>
      

    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <strong>Codigo de nota: </strong>
            {{ $notas->cod_nota }}
        </div>
      </div>

      <div class="col-6">
          <div class="form-group">
            <strong>Lapso 1: </strong>
              {{ $notas->lapso_1 }}
          </div>
        </div>

    </div>

    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <strong>Codigo de profesor: </strong>
            {{ $notas->cod_profesor }}
        </div>
      </div>

      <div class="col-6">
          <div class="form-group">
            <strong>Lapso 2: </strong>
              {{ $notas->lapso_2 }}
          </div>
        </div>

    </div>

    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <strong>Codigo de alumno: </strong>
            {{ $notas->cod_alumno }}
        </div>
      </div>

      <div class="col-6">
          <div class="form-group">
            <strong>Lapso 3: </strong>
              {{ $notas->lapso_3 }}
          </div>
        </div>


    </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <strong>Nombres: </strong>
                  {{ $notas->nombres }}
              </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                  <strong>Final: </strong>
                    {{ $notas->final }}
                </div>
              </div>

          </div>

          <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <strong>Apellidos: </strong>
                    {{ $notas->apellidos }}
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <strong>Codigo de la clase: </strong>
                      {{ $notas->cod_clase }}
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <strong>Clase: </strong>
                        {{ $notas->clase }}
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <strong>Curso: </strong>
                          {{ $notas->curso }}
                      </div>
                    </div>
                  </div>
                  <br>

          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('prof.notas.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection