@extends('layouts.prof-navbar')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

          <table class="table table-borderless table-sm">
              <tr>  
                <td>
          <h2>Notas Academicas</h2>
                </td>
      
        {{ Form::open(['route' => 'prof.notas.index', 'method' => 'GET', 'class' => 'pull-right']) }}
      
        <td>
            {{ Form::select('cod_clase', $select1, old('cod_clase'), ['class' => 'form-control', 'required']) }}           
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
        <th>Codigo de nota</th>
        <th>Codigo de alumno</th>
        <th>Codigo de clase</th>
        <th>Lapso 1</th>
        <th>Lapso 2</th>
        <th>Lapso 3</th>
        <th>Final</th>

      <th class="text-center" colspan="2">
        <a href="{{route('prof.notas.create')}}" class="btn btn-success btn-sm">
          Añadir
        </a>
      </th>

    </tr>

    <?php $no=1; ?>
    @foreach ($notas as $key => $value)
      <tr>

        <td>{{$no++}}</td>

        <td>{{ $value->cod_nota }}</td>

        <td>{{ $value->cod_alumno }}</td>

        <td>{{ $value->cod_clase }}</td>

        <td>{{ $value->lapso_1 }}</td>

        <td>{{ $value->lapso_2 }}</td>

        <td>{{ $value->lapso_3 }}</td>

        <td>{{ $value->final }}</td>
        
        <td class="text-center" style="width:140px;">
          <a class="btn btn-info btn-sm" href="{{route('prof.notas.show', $value->id)}}">
            Ver
          </a>
          <a class="btn btn-primary btn-sm" href="{{route('prof.notas.edit',$value->id)}}">
            Editar
          </a>
        </td>
        <td style="width:77px;">
          {{ Form::open(['method' => 'DELETE', 'onclick' => "return confirm('¿Esta seguro de que desea borrar el registro?')",'route' => ['prof.notas.destroy', $value->id],'style'=>'display' ]) }}
            <button display="inline" type="submit" style="display: inline;" class="btn btn-danger btn-sm">Borrar</button>
          {{ Form::close() }}

        </td>
      </tr>
    @endforeach

    </table>
    </div>

@endsection