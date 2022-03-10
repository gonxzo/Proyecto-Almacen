<div class="form-group">
    {!! Form::label('descripcion','CLASIFICACION DE LA HERRAMIENTA') !!}
    {!! Form::text('descripcion', null, ['class'=> 'form-control', 'onKeyUp'=> 'this.value=this.value.toUpperCase();']) !!}
 
</div>
  
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  <a href="{{ route('clasherramientas.index') }}" class="btn btn-sm btn-primary">Volver</a>
  </div>
