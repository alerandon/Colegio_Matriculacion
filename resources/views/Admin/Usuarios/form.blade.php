<div class="container">

    <div class="row">
  
        <div class="col-12 col-md-1">
            {{ Form::label('name','Nombre de usuario:') }}
          </div>
          <div class="col-12 col-md-5">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
              {{ Form::text('name', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Nombre de usuario...']) }}
              {{ $errors->first('name', '<p class="help-block">:message</p>') }}
            </div>
          </div>

    </div>

    <div class="row">
  
          <div class="col-12 col-md-1">
              {{ Form::label('email','Correo electrónico:') }}
          </div>
          <div class="col-12 col-md-5">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::text('email', NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Correo electrónico...']) }}
                    {{ $errors->first('email', '<p class="help-block">:message</p>') }}
                </div>
          </div>

    </div>

    <div class="row">
  
            <div class="col-12 col-md-1">
                {{ Form::label('password','Contraseña:') }}
              </div>
              <div class="col-12 col-md-5">
                  <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                      {{ Form::text('password', NULL, ['class'=>'form-control', 'id'=>'password', 'placeholder'=>'Contraseña...']) }}
                      {{ $errors->first('password', '<p class="help-block">:message</p>') }}
                  </div>
              </div>

    </div>
      <br>
  
    </div>
  
    <div class="row">
      
        <div class="col-6 col-lg-1">
          {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
        </div>
    
        <div class="col-6 col-lg-1">        
          <a href="{{route('admin.usuarios.index')}}" class="btn btn-primary">Regresar</a>
        </div>
      
    </div>

  </div>