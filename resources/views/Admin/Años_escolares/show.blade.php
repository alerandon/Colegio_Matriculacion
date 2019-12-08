@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Periodo Escolar</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo: </strong>
            {{ $años_escolares->cod_año_escolar }}
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Año de inicio: </strong>
            {{ $años_escolares->año_inicio }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Año de cierre: </strong>
                  {{ $años_escolares->año_cierre }}
              </div>
            </div>
          </div>
          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('admin.años_escolares.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection