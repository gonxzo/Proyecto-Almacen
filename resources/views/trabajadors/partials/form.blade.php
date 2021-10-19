<div class="form-group">
    {!! Form::label('nombre','Nombre del Trabajador') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
    {!! Form::label('apellidos','Apellidos del Trabajador') !!}
    {!! Form::text('apellidos', null, ['class'=> 'form-control']) !!}
    {!! Form::label('edad','Edad del Trabajador') !!}
    {!! Form::text('edad', null, ['class'=> 'form-control']) !!}
    {!! Form::label('cargo','Cargo del Trabajador') !!}
    {!! Form::text('cargo', null, ['class'=> 'form-control']) !!}
   
  
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
