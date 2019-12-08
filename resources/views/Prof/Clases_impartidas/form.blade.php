<div class="container">

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('cod_clase','Codigo de clase:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('cod_clase') ? 'has-error' : '' }}">
        {{ Form::text('cod_clase', NULL, ['class'=>'form-control', 'id'=>'cod_clase', 'placeholder'=>'Codigo de la clase...']) }}
        {{ $errors->first('cod_clase', '<p class="help-block">:message</p>') }}
      </div>
    </div>

    <div class="col-12 col-md-1">
        {{ Form::label('cod_profesor','Codigo de profesor:') }}
      </div>
      <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('cod_profesor') ? 'has-error' : '' }}">
          {{ Form::text('cod_profesor', $prof, ['class'=>'form-control', 'id'=>'cod_profesor', 'placeholder'=>'Codigo de profesor...']) }}
          {{ $errors->first('cod_profesor', '<p class="help-block">:message</p>') }}
        </div>
      </div>

  </div>

  <div class="row">

    <div class="col-12 col-md-1">
        {{ Form::label('cod_año_escolar','Codigo de año escolar:') }}
      </div>
      <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('cod_año_escolar') ? 'has-error' : '' }}">
          {{ Form::select('cod_año_escolar', $select1, old('cod_año_escolar'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('cod_año_escolar', '<p class="help-block">:message</p>') }}
        </div>
      </div>

      <div class="col-12 col-md-1">
          {{ Form::label('cod_materia','Codigo de materia:') }}
        </div>
        <div class="col-12 col-md-5">
          <div class="form-group {{ $errors->has('cod_materia') ? 'has-error' : '' }}">
            {{ Form::select('cod_materia', $select2, old('cod_materia'), ['class' => 'form-control', 'required']) }}
            {{ $errors->first('cod_materia', '<p class="help-block">:message</p>') }}
          </div>
        </div>

    </div>

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('curso','Curso:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('curso') ? 'has-error' : '' }}">
        {{ Form::select('curso', $select3, old('curso'), ['class' => 'form-control', 'required']) }}
        {{ $errors->first('curso', '<p class="help-block">:message</p>') }}
      </div>
    </div>

    <div class="col-12 col-md-1">
        {{ Form::label('clase','Clase:') }}
      </div>
      <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('clase') ? 'has-error' : '' }}">
          {{ Form::select('clase', $select4, old('clase'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('clase', '<p class="help-block">:message</p>') }}
        </div>
      </div>

  </div>
  <br>

  <div class="row">
    
    <div class="col-6 col-lg-1">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>

    <div class="col-6 col-lg-1">        
      <a href="{{route('prof.clases_impartidas.index')}}" class="btn btn-primary">Regresar</a>
    </div>
  
  </div>

</div>