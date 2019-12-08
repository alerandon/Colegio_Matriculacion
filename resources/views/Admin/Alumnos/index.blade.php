@extends('layouts.admin-navbar')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

          <h2>Alumnos</h2>

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
    <table class="table  table-bordered table-sm">
    <tr>
      <th>No.</th>
      <th>Codigo</th>
      <th>C.I.</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Fecha de Nacimiento</th>
      <th>Lugar de Nacimiento</th>
      <th class="text-center" colspan="2">
        <a href="{{route('admin.alumnos.create')}}" class="btn btn-success btn-sm">
          Añadir
        </a>
      </th>

    </tr>

    <?php $no=1; ?>
    @foreach ($alumnos as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->cod_alumno }}</td>

        <td>{{ $value->cedula_identidad }}</td>
        
        <td>{{ $value->nombres }}</td>
        
        <td>{{ $value->apellidos }}</td>

        <td>{{ $value->fecha_nacimiento }}</td>

        <td>{{ $value->lugar_nacimiento }}</td>

        <td class="text-center" style="width:140px;">
          <a class="btn btn-info btn-sm" href="{{route('admin.alumnos.show', $value->id)}}">
            Ver
          </a>
          <a class="btn btn-primary btn-sm" href="{{route('admin.alumnos.edit',$value->id)}}">
            Editar
          </a>
        </td>
        <td style="width:77px;">
          {{ Form::open(['method' => 'DELETE', 'onclick' => "return confirm('¿Esta seguro de que desea borrar el registro?')",'route' => ['admin.alumnos.destroy', $value->id],'style'=>'display' ]) }}
            <button display="inline" type="submit" style="display: inline;" class="btn btn-danger btn-sm">Borrar</button>
          {{ Form::close() }}

        </td>
      </tr>

    @endforeach

    </table>
    </div>

@endsection