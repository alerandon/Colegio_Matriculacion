@extends('layouts.prof-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Clase</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo de clase: </strong>
            {{ $clases_impartidas->cod_clase }}
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12">
          <div class="form-group">
            <strong>Codigo de profesor: </strong>
              {{ $clases_impartidas->cod_profesor }}
          </div>
        </div>
      </div>
    
      <div class="row">
          <div class="col-12">
            <div class="form-group">
              <strong>Codigo de año escolar: </strong>
                {{ $clases_impartidas->cod_año_escolar }}
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Codigo de materia: </strong>
                  {{ $clases_impartidas->cod_materia }}
              </div>
            </div>
          </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Curso: </strong>
            {{ $clases_impartidas->curso }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Clase: </strong>
                  {{ $clases_impartidas->clase }}
              </div>
            </div>
          </div>
          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('prof.clases_impartidas.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection