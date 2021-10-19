<div class="form-row">
    <div class="form-group col-md-4">
    {!! Form::label('name','Nombre del Role') !!}
    {!! Form::text('name', null, ['class'=> 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
    {!! Form::label('slug','Abreviatura') !!}
    {!! Form::text('slug', null, ['class'=> 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
    {!! Form::label('description','Descripción') !!}
    {!! Form::text('description', null, ['class'=> 'form-control']) !!}
    </div>
</div>
<hr>

<h3>Lista de Permisos</h3>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($permissions as $item)
      <li>
        <label>
          {!! Form::checkbox('permissions[]',$item->id,null) !!}
          {{$item->name}}
          <em>({{$item->description ?:'Sin descripcion'}})</em>
        </label>
      </li>
    @endforeach
  </ul>
</div>
<div class="form-group">
{!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
</div>
