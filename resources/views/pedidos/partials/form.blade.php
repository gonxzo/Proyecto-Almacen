<div class="form-group">
    {!! Form::label('idusuario','Trabajadores') !!}
    <select class="form-control" name="idusuario" id="idusuario">
      @foreach($user as $usuario)
           <option value="{{$usuario['id']}}">{{$usuario['name']}} 
           </option>
      @endforeach
</select>
    {!! Form::label('idproyecto','Proyectos') !!}
    <select class="form-control" name="idproyecto" id="idproyecto">
      @foreach($proyecto as $proy)
           <option value="{{$proy['id']}}">{{$proy['nombre']}} 
           </option>
      @endforeach
</select>
    {!! Form::label('cargo','Cargo') !!}
    <select class="form-control" name="cargo" id="cargo">
        <option>GERENTE</option>
        <option>SUPERVISOR DE OBRA</option>
        <option>OBRERO</option>
        <option>ALMACENERO</option>
    </select>
    <strong> {!! Form::label('fecha','Fecha de Registro') !!}</strong>
    {!! Form::date('fecha', null, ['class'=> 'form-control', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
</div>
  <div class="form-group">
  {!! Form::submit('GUARDAR', ['class'=>'btn btn-sm btn-primary']) !!}
  <a href="{{route('trabajadors.index')}}"  class="btn btn-sm btn-primary">VOLVER</a>
  </div>
