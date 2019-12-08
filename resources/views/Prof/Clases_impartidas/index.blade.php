@extends('layouts.prof-navbar')
@inject('select', 'App\años_escolares')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
      
      <table class="table table-borderless table-sm">
        <tr>  
          <td>
          <h2>Clases Impartidas</h2>
          </td>
      
      {{ Form::open(['route' => 'prof.clases_impartidas.index', 'method' => 'GET', 'class' => 'pull-right']) }}
          
            <td>
            {{ Form::select('cod_año_escolar', $select1, old('cod_año_escolar'), ['class' => 'form-control', 'required']) }}           
            </td>
            <td>
            <button type="submit" class="btn btn-default">Buscar</button>
            </td>
          </tr>
      {{ Form::close() }}
     
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

    <div class="container">
    <table class="table table-bordered table-sm">
    <tr>
      <th>No.</th>
      <th>Codigo de Clase</th>
      <th>Codigo de Año escolar</th>
      <th>Codigo de Profesor</th>
      <th>Curso</th>
      <th>Clase</th>
      <th class="text-center" colspan="2">
        <a href="{{route('prof.clases_impartidas.create')}}" class="btn btn-success btn-sm">
          Añadir
        </a>
      </th>

    </tr>

    <?php $no=1; ?>
    @foreach ($clases_impartidas as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->cod_clase }}</td>
        
        <td>{{ $value->cod_año_escolar }}</td>

        <td>{{ $value->cod_profesor }}</td>

        <td>{{ $value->curso }}</td>
        
        <td>{{ $value->clase }}</td>
        
        <td class="text-center" style="width:140px;">
          <a class="btn btn-info btn-sm" href="{{route('prof.clases_impartidas.show', $value->id)}}">
            Ver
          </a>
          <a class="btn btn-primary btn-sm" href="{{route('prof.clases_impartidas.edit',$value->id)}}">
            Editar
          </a>
        </td>
        <td style="width:77px;">
          {{ Form::open(['method' => 'DELETE', 'onclick' => "return confirm('¿Esta seguro de que desea borrar el registro?')", 'route' => ['prof.clases_impartidas.destroy', $value->id],'style'=>'display' ]) }}
            <button display="inline" type="submit" style="display: inline;" class="btn btn-danger btn-sm">Borrar</button>
          {{ Form::close() }}

        </td>
      </tr>
    @endforeach

    </table>
    {{ $clases_impartidas->appends(Request::only(['cod_año_escolar']))->render() }}
    </div>

@endsection