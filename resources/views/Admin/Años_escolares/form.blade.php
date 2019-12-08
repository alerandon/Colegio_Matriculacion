<div class="container">

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('cod_año_escolar','Codigo:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('cod_año_escolar') ? 'has-error' : '' }}">
        {{ Form::text('cod_año_escolar', NULL, ['class'=>'form-control', 'id'=>'cod_año_escolar', 'placeholder'=>'Codigo...']) }}
        {{ $errors->first('cod_año_escolar', '<p class="help-block">:message</p>') }}
      </div>
    </div>

  </div>
  
  <div class="row">
    <div class="col-12 col-md-1">
      {{ Form::label('año_inicio','Año de inicio:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('año_inicio') ? 'has-error' : '' }}">
        {{ Form::text('año_inicio', NULL, ['class'=>'form-control', 'id'=>'año_inicio', 'placeholder'=>'Año de inicio...']) }}
        {{ $errors->first('año_inicio', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-1">
      {{ Form::label('año_cierre','Año de cierre:') }}
    </div>
    <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('año_cierre') ? 'has-error' : '' }}">
            {{ Form::text('año_cierre', NULL, ['class'=>'form-control', 'id'=>'año_cierre', 'placeholder'=>'Año de cierre...']) }}
            {{ $errors->first('año_cierre', '<p class="help-block">:message</p>') }}
        </div>
    </div>
  </div>
  <br>

  <div class="row">
    
    <div class="col-6 col-lg-1">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>

    <div class="col-6 col-lg-1">        
      <a href="{{route('admin.años_escolares.index')}}" class="btn btn-primary">Regresar</a>
    </div>
  
  </div>

</div>