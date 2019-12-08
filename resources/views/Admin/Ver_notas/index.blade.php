@extends('layouts.admin-navbar')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

          <table class="table table-borderless table-sm">
              <tr>  
                <td>
          <h2>Notas por Alumno</h2>
        </td>
      
        {{ Form::open(['route' => 'admin.ver_notas.index', 'method' => 'GET', 'class' => 'pull-right']) }}
      
        <td>
            {{ Form::select('cod_alumno', $select1, old('cod_alumno'), ['class' => 'form-control', 'required']) }}           
          </td>
          <td>
              {{ Form::select('curso', $select2, old('curso'), ['class' => 'form-control', 'required']) }}           
            </td>
        <td style="width:71px;">
          <button type="submit" class="btn btn-default" name="filtro">Buscar</button>
        </td>
        
  {{ Form::close() }}

  {{ Form::model($notas, ['route' => 'admin.ver_notas.store', 'method' => 'POST']) }}

        @isset($_GET['filtro'])
            
        {{ Form::hidden('cod_alumno', $_REQUEST['cod_alumno']) }}
        {{ Form::hidden('curso', $_REQUEST['curso']) }}

        @endisset

        <td style="width:122px;">
        <button type="submit" class="btn btn-primary" <?php if(!isset($_GET['filtro']) ) { ?> disabled <?php  } ?>>Enviar a correo</button>

  {{ Form::close() }}     
     
        </td>
      </tr>
  </table>

  

      </div>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="container">
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    </div>
  @endif

  @if ($message = Session::get('danger'))
    <div class="container">
      <div class="alert alert-danger">
        <p>{{ $message }}</p>
      </div>
    </div>
  @endif

    <div class="container">
    <table class="table table-bordered table-sm">
    <tr>
      <th>No.</th>
      <th>Codigo de nota</th>
      <th>Codigo de alumno</th>
      <th>Codigo de clase</th>
      <th>Curso</th>
      <th>Lapso 1</th>
      <th>Lapso 2</th>
      <th>Lapso 3</th>
      <th>Final</th>


    </tr>

    <?php $no=1; ?>
    @foreach ($notas as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->cod_nota }}</td>

        <td>{{ $value->cod_alumno }}</td>

        <td>{{ $value->cod_clase }}</td>

        <td>{{ $value->curso }}</td>

        <td>{{ $value->lapso_1 }}</td>

        <td>{{ $value->lapso_2 }}</td>

        <td>{{ $value->lapso_3 }}</td>

        <td>{{ $value->final }}</td>
        

        </td>
      </tr>
    @endforeach

    </table>
    </div>

@endsection