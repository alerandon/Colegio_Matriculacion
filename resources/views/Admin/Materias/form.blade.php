<div class="container">

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('cod_materia','Codigo:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('cod_materia') ? 'has-error' : '' }}">
        {{ Form::text('cod_materia', NULL, ['class'=>'form-control', 'id'=>'cod_materia', 'placeholder'=>'Codigo...']) }}
        {{ $errors->first('cod_materia', '<p class="help-block">:message</p>') }}
      </div>
    </div>

  </div>
  
  <div class="row">
    <div class="col-12 col-md-1">
      {{ Form::label('materia','Materia:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('materia') ? 'has-error' : '' }}">
        {{ Form::text('materia', NULL, ['class'=>'form-control', 'id'=>'materia', 'placeholder'=>'Materia...']) }}
        {{ $errors->first('materia', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-1">
      {{ Form::label('año_curso','Año de Curso:') }}
    </div>
    <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('año_curso') ? 'has-error' : '' }}">
            {{ Form::text('año_curso', NULL, ['class'=>'form-control', 'id'=>'año_curso', 'placeholder'=>'Año de curso...']) }}
            {{ $errors->first('año_curso', '<p class="help-block">:message</p>') }}
        </div>
    </div>
  </div>
  <br>

  <div class="row">
    
    <div class="col-6 col-lg-1">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>

    <div class="col-6 col-lg-1">        
      <a href="{{ route('admin.materias.index') }}" class="btn btn-primary">Regresar</a>
    </div>
  
  </div>

</div>