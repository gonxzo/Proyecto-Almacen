<div class="form-row">
  <div class="form-group col-md-6">
      <strong> {!! Form::label('nombre','Nombre del Proyecto') !!}</strong>
      {!! Form::text('nombre', null, ['class'=> 'form-control', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
  </div>
  <div class="form-group col-md-6">
    <strong> {!! Form::label('tipo','Tipo de Proyecto') !!}</strong>
    <select class="form-control" name="tipo" id="tipo">
      <option>CONSTRUCCIÓN NUEVA</option>
      <option>RENOVACIÓN</option>
    </select>
</div>
</div>
<div class="form-row">
  <div class="form-group col-md-4">
      <strong> {!! Form::label('fechai','Fecha de Inicio') !!}</strong>
      {!! Form::date('fechai', null, ['class'=> 'form-control', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
  </div>
  <div class="form-group col-md-4">
      <strong> {!! Form::label('fechaf','Fecha Final') !!}</strong>
      {!! Form::date('fechaf', null, ['class'=> 'form-control', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
  </div>
  <div class="form-group col-md-4">
    <strong> {!! Form::label('fechae','Fecha de entrega') !!}</strong>
    {!! Form::date('fechae', null, ['class'=> 'form-control', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('superficieutil','Superficie Util') !!}</strong>
      {!! Form::text('superficieutil', null, ['class'=> 'form-control', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('descripcion','Descripcion de la Obra') !!}</strong>
      {!! Form::textArea('descripcion', null, ['class'=> 'form-control','rows'=>'4', 'onKeyUp'=>'this.value=this.value.toUpperCase();']) !!}
  </div>
</div>

  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
