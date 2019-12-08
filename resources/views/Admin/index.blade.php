@extends('layouts.admin-navbar')

@section('content')

<div class="container">
  <div class="row">

    <div class="col">
      <h3>Usted es un administrador...</h3>
    </div>

  </div>
  <div class="row">

    <div class="col-12 col-md-6">
      <p class="text-justify">Se encarga de registrar los años escolares, alumnos y representantes, profesores y sus usuarios, materias, y de verificar las notas academicas para su envio por correo.
    </div>
  
  </div>
  <br>

  <div class="row">
    
    <div class="col">
      <h3>Estadisticas de registros:</h3>
    </div>
    
  </div>
  <br>

  <div class="row justify-content-around">

    <div class="col-12 col-md-3 text-light" style="background-color: #2D732A;">

      <h1 class="display-4">{{ $c1 }}</h1>
      <h5>Años escolares registrados</h5>

    </div>

    <div class="col-12 col-md-3 text-light" style="background-color: #78028c;">

        <h1 class="display-4">{{ $c3 }}</h1>
        <h5>Materias registradas</h5>

    </div>

    <div class="col-12 col-md-3 text-light" style="background-color: #e10b00;">

        <h1 class="display-4">{{ $c2 }}</h1>
        <h5>Alumnos registrados</h5>

    </div>

  </div>
  <br><br>

  <div class="row justify-content-around">

      <div class="col-12 col-md-3 text-light" style="background-color: #ff9500;">

          <h1 class="display-4">{{ $c4 }}</h1>
          <h5>Usuarios registrados</h5>
    
        </div>
    
        <div class="col-12 col-md-3 text-light" style="background-color: #0d1494;">
    
            <h1 class="display-4">{{ $c5 }}</h1>
            <h5>Representantes registrados</h5>
    
        </div>
    
        <div class="col-12 col-md-3 text-light" style="background-color: #86d100;">
    
            <h1 class="display-4">{{ $c6 }}</h1>
            <h5>Profesores registrados</h5>
    
        </div>

  </div>

</div>



@endsection