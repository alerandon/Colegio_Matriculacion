@extends('layouts.admin-navbar')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

          <h2>Periodos escolares</h2>

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
      <th>Año de inicio</th>
      <th>Año de cierre</th>
      <th class="text-center" colspan="2">
        <a href="{{route('admin.años_escolares.create')}}" class="btn btn-success btn-sm">
          Añadir
        </a>
      </th>

    </tr>

    <?php $no=1; ?>
    @foreach ($años_escolares as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->cod_año_escolar }}</td>

        <td>{{ $value->año_inicio }}</td>
        
        <td>{{ $value->año_cierre }}</td>
        
        <td class="text-center" style="width:77px;">
          <!--
          <a class="btn btn-info btn-sm" href="{{route('admin.años_escolares.show', $value->id)}}">
            Ver
          </a>
          -->
          <a class="btn btn-primary btn-sm" href="{{route('admin.años_escolares.edit',$value->id)}}">
            Editar
          </a>
        </td>
        <td style="width:77px;">
          {{ Form::open(['method' => 'DELETE', 'onclick' => "return confirm('¿Esta seguro de que desea borrar el registro?')", 'route' => ['admin.años_escolares.destroy', $value->id],'style'=>'display' ]) }}
            <button display="inline" type="submit" style="display: inline;" class="btn btn-danger btn-sm">Borrar</button>
          {{ Form::close() }}

        </td>
      </tr>
    @endforeach

    </table>
    </div>

@endsection