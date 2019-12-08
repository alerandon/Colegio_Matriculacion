<div class="container">

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('cod_lista','Codigo de lista:') }}
    </div>
    <div class="col-12 col-md-3">
      <div class="form-group {{ $errors->has('cod_lista') ? 'has-error' : '' }}">
        {{ Form::text('cod_lista', NULL, ['class'=>'form-control', 'id'=>'cod_lista', 'placeholder'=>'Codigo de lista...']) }}
        {{ $errors->first('cod_lista', '<p class="help-block">:message</p>') }}
      </div>
    </div>

    <div class="col-12 col-md-1">
        {{ Form::label('cod_clase','Codigo de clase:') }}
      </div>
      <div class="col-12 col-md-3">
        <div class="form-group {{ $errors->has('cod_clase') ? 'has-error' : '' }}">
          {{ Form::select('cod_clase', $select1, old('cod_clase'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('cod_clase', '<p class="help-block">:message</p>') }}
        </div>
      </div>
    
      <div class="col-12 col-md-1">
        {{ Form::label('cod_profesor','Codigo de profesor:') }}
      </div>
      <div class="col-12 col-md-3">
        <div class="form-group {{ $errors->has('cod_profesor') ? 'has-error' : '' }}">
          {{ Form::text('cod_profesor', $prof, ['class'=>'form-control', 'id'=>'cod_profesor', 'placeholder'=>'Codigo de profesor...']) }}
          {{ $errors->first('cod_profesor', '<p class="help-block">:message</p>') }}
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
      <div class="form-group {{ $errors->has('curso') ? 'has-error' : '' }}">
        {{ Form::select('clase', $select4, old('clase'), ['class' => 'form-control', 'required']) }}
        {{ $errors->first('clase', '<p class="help-block">:message</p>') }}
      </div>
    </div>

  </div>
  
  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('cod_alumno','Codigo de alumno:') }}
    </div>
    <div class="col-12 col-md-5">
      <div class="form-group {{ $errors->has('cod_alumno') ? 'has-error' : '' }}">
        {{ Form::select('cod_alumno', $select2, old('cod_alumno'), ['class' => 'form-control', 'required']) }}
        {{ $errors->first('cod_alumno', '<p class="help-block">:message</p>') }}
      </div>
    </div>

    <div class="col-12 col-md-1">
        {{ Form::label('cedula_identidad','Cedula de identidad:') }}
      </div>
      <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('curso') ? 'has-error' : '' }}">
          {{ Form::select('cedula_identidad', $select5, old('cedula_identidad'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('cedula_identidad', '<p class="help-block">:message</p>') }}
        </div>
      </div>

  </div>

  <div class="row">

      <div class="col-12 col-md-1">
        {{ Form::label('nombres','Nombres:') }}
      </div>
      <div class="col-12 col-md-5">
        <div class="form-group {{ $errors->has('nombres') ? 'has-error' : '' }}">
          {{ Form::select('nombres', $select6, old('nombres'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('nombres', '<p class="help-block">:message</p>') }}
        </div>
      </div>
  
      <div class="col-12 col-md-1">
          {{ Form::label('apellidos','Apellidos:') }}
        </div>
        <div class="col-12 col-md-5">
          <div class="form-group {{ $errors->has('curso') ? 'has-error' : '' }}">
            {{ Form::select('apellidos', $select7, old('apellidos'), ['class' => 'form-control', 'required']) }}
            {{ $errors->first('apellidos', '<p class="help-block">:message</p>') }}
          </div>
        </div>
  
    </div>

  <br>

  <div class="row">
    
    <div class="col-6 col-lg-1">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>

    <div class="col-6 col-lg-1">        
      <a href="{{route('prof.listas_alumnos.index')}}" class="btn btn-primary">Regresar</a>
    </div>
  
  </div>

</div>