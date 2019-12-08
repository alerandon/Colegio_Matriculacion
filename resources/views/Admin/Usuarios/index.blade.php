@extends('layouts.admin-navbar')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

          <h2>Usuarios</h2>

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
      <th>Nombre</th>
      <th>Correo Electrónico</th>
      <th class="text-center" colspan="2">
        <a href="{{route('admin.usuarios.create')}}" class="btn btn-success btn-sm">
          Añadir
        </a>
      </th>

    </tr>

    <?php $no=1; ?>
    @foreach ($user as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->name }}</td>

        <td>{{ $value->email }}</td>

        <td class="text-center" style="width:77px;">
          <!--
          <a class="btn btn-info btn-sm" href="{{route('admin.usuarios.show', $value->id)}}">
            Ver
          </a>
          -->
          <a class="btn btn-primary btn-sm <?php if ($value->name == 'Admin') { ?> disabled <?php } ?>" href="{{route('admin.usuarios.edit',$value->id)}}" >
            Editar
          </a>
        </td>
        <td style="width:77px;">
          {{ Form::open(['method' => 'DELETE', 'onclick' => "return confirm('¿Esta seguro de que desea borrar el registro?')",'route' => ['admin.usuarios.destroy', $value->id],'style'=>'display' ]) }}
        <button display="inline" type="submit" style="display: inline;" class="btn btn-danger btn-sm" <?php if ($value->name == 'Admin') { ?> disabled <?php } ?> >Borrar</button>
          {{ Form::close() }}

        </td>
      </tr>

    @endforeach

    </table>
    </div>

@endsection