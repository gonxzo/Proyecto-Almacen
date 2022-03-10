<div class="form-group">
    {!! Form::label('descripcion','Nombre del Material') !!}
    {!! Form::text('descripcion', null, ['class'=> 'form-control']) !!}
    {!! Form::label('unidad','Unidad de Medida') !!}
    {!! Form::text('unidad', null, ['class'=> 'form-control']) !!}
    {!! Form::label('cantidad','Cantidad en Stock') !!}
    {!! Form::text('cantidad', null, ['class'=> 'form-control']) !!}
 <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  <a href="{{route('materials.index')}}"  class="btn btn-sm btn-primary">Volver</a>
  
  </div>

  
