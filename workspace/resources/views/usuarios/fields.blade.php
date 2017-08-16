
<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Estudiante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_usuario', 'Cod Estudiante:') !!}
    {!! Form::number('cod_usuario', null, ['class' => 'form-control']) !!}
    
    <!-- Cod Estudiante Field -->
</div>

<div class="form-group col-sm-6">
    {!! Form::label('cedula', 'Cedula:') !!}
    {!! Form::number('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
     {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
     {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Semestre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semestre', 'Semestre:') !!}
     {!! Form::number('semestre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_usuario', 'Tipo Usuario:') !!}
  {!! Form::text('tipo_usuario', null, ['class' => 'form-control']) !!}
</div>

        

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
