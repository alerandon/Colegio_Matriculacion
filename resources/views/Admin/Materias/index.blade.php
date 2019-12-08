@extends('layouts.admin-navbar')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

          <h2>Materias</h2>

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
      <th>Codigo</th>
      <th>Materia</th>
      <th>Año de curso</th>
      <th class="text-center" colspan="2">
        <a href="{{ route('admin.materias.create') }}" class="btn btn-success btn-sm">
          Añadir
        </a>
      </th>

    </tr>

    <?php $no=1; ?>
    @foreach ($materias as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->cod_materia }}</td>

        <td>{{ $value->materia }}</td>
        
        <td>{{ $value->año_curso }}</td>
        
        <td class="text-center" style="width:77px;">
          <!--
          <a class="btn btn-info btn-sm" href="{{route('admin.materias.show', $value->id)}}">
            Ver
          </a>
          -->
          <a class="btn btn-primary btn-sm" href="{{route('admin.materias.edit',$value->id)}}">
            Editar
          </a>
        </td>
        <td style="width:77px;">
          {{ Form::open(['method' => 'DELETE', 'onclick' => "return confirm('¿Esta seguro de que desea borrar el registro?')",'route' => ['admin.materias.destroy', $value->id],'style'=>'display' ]) }}
            <button display="inline" type="submit" style="display: inline;" class="btn btn-danger btn-sm">Borrar</button>
          {{ Form::close() }}

        </td>
      </tr>
    @endforeach

    </table>
    </div>

@endsection