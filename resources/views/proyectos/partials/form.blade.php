<div class="form-row">
  <div class="form-group col-md-6">
      <strong> {!! Form::label('nombre','Nombre del Proyecto') !!}</strong>
      <input type="text" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="nombre" id="nombre" value="{{old('nombre')}}">
      @error('nombre')
         <small> <H6 style="color:red;">*Ingrese Nombre del Proyecto</H6> </small>
      @enderror
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
      <input type="date" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="fechai" id="fechai" value="{{old('fechai')}}">
      @error('fechai')
         <small> <H6 style="color:red;">*Introduzca Fecha de Inicio</H6> </small>
      @enderror
  </div>
  <div class="form-group col-md-4">
      <strong> {!! Form::label('fechaf','Fecha Final') !!}</strong>
      <input type="date" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="fechaf" id="fechaf" value="{{old('fechaf')}}">
      @error('fechaf')
          <small> <H6 style="color:red;">*Introduzca Fecha Final</H6> </small>
      @enderror
  </div>
  <div class="form-group col-md-4">
    <strong> {!! Form::label('fechae','Fecha de entrega') !!}</strong>
    <input type="date" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="fechae" id="fechae" value="{{old('fechae')}}">
    @error('fechae')
        <small> <H6 style="color:red;">*Introduzca Fecha de Entrega</H6> </small>
    @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('superficieutil','Superficie Util') !!}</strong>
      <input type="text" rows="2" class="form-control" onKeyUp="this.value=this.value.toUpperCase();"  name="superficieutil" id="superficieutil" value="{{old('superficieutil')}}">
   
      @error('superficieutil')
         <small> <H6 style="color:red;">*Introduzca Superfici Util</H6> </small>
      @enderror
      
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('descripcion','Descripcion de la Obra') !!}</strong>
      <textarea type="text" rows="2" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="descripcion" id="descripcion" value="{{old('descripcion')}}"></textarea>
      @error('descripcion')
          <small> <H6 style="color:red;">*Introduzca Descripcion</H6> </small>
      @enderror
  </div>
</div>

  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
