@extends('layouts.admin-navbar')

@section('content')

  <div class="container">

   <div class="row">
      <div class="col">
          <h2>Materia</h2>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Codigo: </strong>
            {{ $materias->cod_materia }}
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <strong>Materia: </strong>
            {{ $materias->materia }}
        </div>
      </div>
    </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <strong>Año de curso: </strong>
                  {{ $materias->año_curso }}
              </div>
            </div>
          </div>
          <br>

      <div class="row">
        <div class="col-12">
          <div class="form-group">        
            <a href="{{route('admin.materias.index')}}" class="btn btn-primary">Regresar</a>
          </div>
        </div>
      </div>

  </div>

@endsection