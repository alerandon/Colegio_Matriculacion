@extends('layouts.prof-navbar')

@section('content')

<div class="container">

    <div class="row">

        <div class="col">
          <h3>¡Bienvenidos profesores!</h3>
        </div>
    
    </div>
      
    <div class="row">
    
        <div class="col-12 col-md-6">
          <p class="text-justify">Seguramente tienen que enlistar las clases que dictaran y que alumnos estaran asignados a las mismas, aqui contienen todo un conjunto para facilitar todo. Y a su vez deben de registrar sus notas lapso por lapso, organicense e inspirense en dar lo mejor de su vocación. ¡Exitos!</p>
        </div>
      
    </div>
    <br>

    <div class="row">
    
      <div class="col">
        <h3>Resumen:</h3>
      </div>
            
    </div>
		<br>
		
		<div class="row justify-content-around">

				<div class="col-12 col-md-3 text-light" style="background-color: #78028c;">
		
					<h3>Clases:</h3>
					
					<h3><span class="display-4"> {{ $p1 }} </span> Asignaciones</h3>
		
				</div>
		
				<div class="col-12 col-md-4 text-light" style="background-color: #0d1494;">
		
						<h3>Listas de Alumnos:</h3>
						
						<h3><span class="display-4"> {{ $p2 }} </span> Alumnos Asignados</h3>
		
				</div>
		
				<div class="col-12 col-md-4 text-light" style="background-color: #2D732A;">
		
						<h3>Notas Académicas:</h3>
						
						<h3><span class="display-4"> {{ $p3 }} </span> Calificaciones</h3>
		
				</div>
		
			</div>

</div>



@endsection