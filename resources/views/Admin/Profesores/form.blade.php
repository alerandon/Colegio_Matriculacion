

<div class="container">

    <div class="row">
        <div class="col-12 col-md-1">
            {{ Form::label('email','Correo electrónico:') }}
          </div>
          <div class="col-12 col-md-5">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              {{ Form::select('email', $select, old('email'), ['class' => 'form-control', 'required']) }}
              {{ $errors->first('email', '<p class="help-block">:message</p>') }}
            </div>
          </div>
    </div>

    <div class="row">
  
        <div class="col-12 col-md-1">
            {{ Form::label('cod_profesor','Codigo:') }}
          </div>
          <div class="col-12 col-md-5">
            <div class="form-group {{ $errors->has('cod_profesor') ? 'has-error' : '' }}">
              {{ Form::text('cod_profesor', NULL, ['class'=>'form-control', 'id'=>'cod_profesor', 'placeholder'=>'Codigo...']) }}
              {{ $errors->first('cod_profesor', 'Rellene el campo') }}
            </div>
          </div>
  
          <div class="col-12 col-md-1">
              {{ Form::label('cedula_identidad','C.I.:') }}
          </div>
          <div class="col-12 col-md-5">
              <div class="form-group {{ $errors->has('cedula_identidad') ? 'has-error' : '' }}">
                {{ Form::text('cedula_identidad', NULL, ['class'=>'form-control', 'id'=>'cedula_identidad', 'placeholder'=>'Cedula...']) }}
                {{ $errors->first('cedula_identidad', 'Rellene el campo') }}
              </div>
          </div>

    </div>

    <div class="row">
  
          <div class="col-12 col-md-1">
              {{ Form::label('nombres','Nombres:') }}
          </div>
          <div class="col-12 col-md-5">
                <div class="form-group {{ $errors->has('nombres') ? 'has-error' : '' }}">
                    {{ Form::text('nombres', NULL, ['class'=>'form-control', 'id'=>'nombres', 'placeholder'=>'Nombres...']) }}
                    {{ $errors->first('nombres', 'Rellene el campo') }}
                </div>
          </div>
  
          <div class="col-12 col-md-1">
              {{ Form::label('apellidos','Apellidos:') }}
            </div>
            <div class="col-12 col-md-5">
                <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : '' }}">
                    {{ Form::text('apellidos', NULL, ['class'=>'form-control', 'id'=>'apellidos', 'placeholder'=>'Apellidos...']) }}
                    {{ $errors->first('apellidos', 'Rellene el campo') }}
                </div>
            </div>
  
    </div>

    <div class="row">
  
            <div class="col-12 col-md-1">
                {{ Form::label('fecha_nacimiento','Fecha de Nacimiento:') }}
              </div>
              <div class="col-12 col-md-5">
                  <div class="form-group {{ $errors->has('fecha_nacimiento') ? 'has-error' : '' }}">
                      {{ Form::text('fecha_nacimiento', NULL, ['class'=>'form-control', 'id'=>'fecha_nacimiento', 'placeholder'=>'Fecha de Nacimiento...']) }}
                      {{ $errors->first('fecha_nacimiento', 'Rellene el campo') }}
                  </div>
              </div>
  
              <div class="col-12 col-md-1">
                  {{ Form::label('lugar_nacimiento','Lugar de Nacimiento:') }}
                </div>
                <div class="col-12 col-md-5">
                    <div class="form-group {{ $errors->has('lugar_nacimiento') ? 'has-error' : '' }}">
                        {{ Form::text('lugar_nacimiento', NULL, ['class'=>'form-control', 'id'=>'lugar_nacimiento', 'placeholder'=>'Lugar de Nacimiento...']) }}
                        {{ $errors->first('lugar_nacimiento', 'Rellene el campo') }}
                    </div>
                </div>
  
    </div>
      <br>
      
  
    <div class="row">
      
        <div class="col-6 col-lg-1">
          {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
        </div>
    
        <div class="col-6 col-lg-1">        
          <a href="{{route('admin.profesores.index')}}" class="btn btn-primary">Regresar</a>
        </div>
      
    </div>

  </div>