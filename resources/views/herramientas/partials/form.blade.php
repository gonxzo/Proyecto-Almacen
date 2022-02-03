<div class="form-group">
    {!! Form::label('descripcion','Nombre de la Herramienta') !!}
    {!! Form::text('descripcion', null, ['class'=> 'form-control']) !!}
    {!! Form::label('unidad','Unidad de Medida') !!}
    {!! Form::text('unidad', null, ['class'=> 'form-control']) !!}
    {!! Form::label('cantidad','Cantidad en Stock') !!}
    {!! Form::text('cantidad', null, ['class'=> 'form-control']) !!}
    {!! Form::label('idclasificacion','Tipo de Herramienta') !!}
    <select class="form-control" name="marca" id="marca">
      @foreach($clasherramientas as $class)
           <option value="{{$class['id']}}">{{$class['descripcion']}} 
           </option>
      @endforeach
</select>
   
  
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  <a href="{{route('herramientas.index')}}"  class="btn btn-sm btn-primary">Volver</a>
  </div>
