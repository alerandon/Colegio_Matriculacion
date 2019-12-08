<div class="container">

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('cod_nota','Codigo de nota:') }}
    </div>
    <div class="col-12 col-md-3">
      <div class="form-group {{ $errors->has('cod_nota') ? 'has-error' : '' }}">
        {{ Form::text('cod_nota', NULL, ['class'=>'form-control', 'id'=>'cod_nota', 'placeholder'=>'Codigo de nota...']) }}
        {{ $errors->first('cod_nota', '<p class="help-block">:message</p>') }}
      </div>
    </div>

    <div class="col-12 col-md-1">
        {{ Form::label('cod_alumno','Codigo de alumno:') }}
      </div>
      <div class="col-12 col-md-3">
        <div class="form-group {{ $errors->has('cod_alumno') ? 'has-error' : '' }}">
          {{ Form::select('cod_alumno', $select_al, old('cod_alumno'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('cod_alumno', '<p class="help-block">:message</p>') }}
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
          {{ Form::label('cedula_identidad','C.I.:') }}
        </div>
        <div class="col-12 col-md-3">
          <div class="form-group {{ $errors->has('cedula_identidad') ? 'has-error' : '' }}">
            {{ Form::select('cedula_identidad', $select_cel, old('cedula_identidad'), ['class' => 'form-control', 'required']) }}
            {{ $errors->first('cedula_identidad', '<p class="help-block">:message</p>') }}
          </div>
        </div>

      <div class="col-12 col-md-1">
        {{ Form::label('nombres','Nombres:') }}
      </div>
      <div class="col-12 col-md-3">
        <div class="form-group {{ $errors->has('nombres') ? 'has-error' : '' }}">
          {{ Form::select('nombres', $select_nom, old('nombres'), ['class' => 'form-control', 'required']) }}
          {{ $errors->first('nombres', '<p class="help-block">:message</p>') }}
        </div>
      </div>
  
      <div class="col-12 col-md-1">
          {{ Form::label('apellidos','Apellidos:') }}
        </div>
        <div class="col-12 col-md-3">
          <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : '' }}">
            {{ Form::select('apellidos', $select_ape, old('apellidos'), ['class' => 'form-control', 'required']) }}
            {{ $errors->first('apellidos', '<p class="help-block">:message</p>') }}
          </div>
        </div>
  
  </div>
  <br>
  
  <div class="row">        
    
    <div class="col-12 col-md-1">
            {{ Form::label('cod_clase','Codigo de la clase:') }}
          </div>
          <div class="col-12 col-md-3">
            <div class="form-group {{ $errors->has('cod_clase') ? 'has-error' : '' }}">
              {{ Form::select('cod_clase', $select_cla, old('cod_clase'), ['class' => 'form-control', 'required']) }}
              {{ $errors->first('cod_clase', '<p class="help-block">:message</p>') }}
            </div>
          </div>
    
    <div class="col-12 col-md-1">
      {{ Form::label('clase','Clase:') }}
    </div>
    <div class="col-12 col-md-3">
      <div class="form-group {{ $errors->has('clase') ? 'has-error' : '' }}">
        {{ Form::select('clase', $select_clas, old('clase'), ['class' => 'form-control', 'required']) }}
        {{ $errors->first('clase', '<p class="help-block">:message</p>') }}
      </div>
    </div>

      <div class="col-12 col-md-1">
          {{ Form::label('curso','Curso:') }}
        </div>
        <div class="col-12 col-md-3">
          <div class="form-group {{ $errors->has('curso') ? 'has-error' : '' }}">
            {{ Form::select('curso', $select_cur, old('curso'), ['class' => 'form-control', 'required']) }}
            {{ $errors->first('curso', '<p class="help-block">:message</p>') }}
          </div>
        </div>

  </div>
  <br>

  <div class="row">
    <div class="col">
      <h4>Notas de lapso:</h4>
    </div>
  </div>
  <br>

  <div class="row">

    <div class="col-12 col-md-1">
      {{ Form::label('lapso_1','Lapso 1:') }}
    </div>
    <div class="col-12 col-md-2">
        <div class="form-group {{ $errors->has('lapso_1') ? 'has-error' : '' }}">
          {{ Form::select('lapso_1', $select1, old('lapso_1'), ['class' => 'form-control', 'id' => 'lapso1', 'required']) }}
            {{ $errors->first('lapso_1', '<p class="help-block">:message</p>') }}
        </div>
    </div>

    <div class="col-12 col-md-1">
        {{ Form::label('lapso_2','Lapso 2:') }}
      </div>
      <div class="col-12 col-md-2">
          <div class="form-group {{ $errors->has('lapso_2') ? 'has-error' : '' }}">
            {{ Form::select('lapso_2', $select2, old('lapso_2'), ['class' => 'form-control', 'id' => 'lapso2', 'required']) }}
              {{ $errors->first('lapso_2', '<p class="help-block">:message</p>') }}
          </div>
      </div>

      <div class="col-12 col-md-1">
          {{ Form::label('lapso_3','Lapso 3:') }}
        </div>
        <div class="col-12 col-md-2">
            <div class="form-group {{ $errors->has('lapso_3') ? 'has-error' : '' }}">
              {{ Form::select('lapso_3', $select3, old('lapso_3'), ['class' => 'form-control', 'id' => 'lapso3', 'required']) }}
                {{ $errors->first('lapso_3', '<p class="help-block">:message</p>') }}
            </div>
        </div>

      <div class="col">
        <button type="button" class="btn btn-info text-light" onclick="calculate()">Calcular</button>
      </div>

  </div>



  <div class="row">

      <div class="col-12 col-md-1">
          {{ Form::label('final','Nota final:') }}
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group {{ $errors->has('final') ? 'has-error' : '' }}">
                {{ Form::text('final', NULL, ['class'=>'form-control', 'id'=>'final', 'placeholder'=>'Nota Final...']) }}
                {{ $errors->first('final', '<p class="help-block">:message</p>') }}
            </div>
        </div>
        
  </div>

  <script>
    function calculate() {
      
      var l1 = document.getElementById("lapso1").value;
      var nota1 = parseFloat(l1) + 1;
      
      var l2 = document.getElementById("lapso2").value;
      var nota2 = parseFloat(l2) + 1;
      
      var l3 = document.getElementById("lapso3").value;
      var nota3 = parseFloat(l3) + 1;
      
      var total = (nota1 + nota2 + nota3) / 3;

      var comp = document.getElementById("final").value = total.toFixed();

    }
  </script>

  <br>

  <div class="row">
    
    <div class="col-6 col-lg-1">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>

    <div class="col-6 col-lg-1">        
      <a href="{{route('prof.notas.index')}}" class="btn btn-primary">Regresar</a>
    </div>
  
  </div>

</div>