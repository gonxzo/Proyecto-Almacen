<div class="card-header"></div>
<div class="form-row">
  <div class="form-group col-md-5">
    <strong>{!! Form::label('trabajador','nombre del trabajador') !!}</strong>
    <select class="form-control" name="idtrab" id="idtrab">
        @foreach ($trabajadors as $trabajador)
        @foreach ($users as $user )
            @if ($user->id == $trabajador->idusuario)
            <option value="{{ $trabajador['id'] }}">{{ $user['name']}}
            </option>
            @endif
        @endforeach
    @endforeach
  </select>
  </div>

  <div class="form-group col-md-5">
  <strong>{!! Form::label('asunto','Motivo Pedido') !!}</strong>
      {!! Form::text('asunto', null, ['class'=> 'form-control','onKeyUp' => "this.value=this.value.toUpperCase();"]) !!}
  </div>
  <div class="form-group col-md-2">
    <strong>{!! Form::label('asunto', 'Nuevo Registro') !!}</strong>
    <button type="button" name="add" id="dynamic-ar" class="btn btn-sm btn-primary">Agregar Registro</button>
</div>
 
</div>
<div class="card-header"></div>
<form action="{{ url('store-input-fields') }}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (Session::has('success'))
    <div class="alert alert-success text-center">
        <p>{{ Session::get('success') }}</p>
    </div>
    @endif
    @if (Auth::user()->id == 47)
    <table class="table table-bordered" id="addremove1">
    @endif
    @if (Auth::user()->id == 46)
    <table class="table table-bordered" id="addremove21">
    @endif
   
        <tr>
            <th>Herramienta</th>
            <th>cantidad</th>
        </tr>
       
        <tr>
            <td> <select class="form-control" name="adicionar[0][herramienta]" >
                @foreach($herramientas as $item)
                    @if ($item->idclasificacion == 7)
                    <option value="{{$item['id']}}">{{$item['descripcion']}} 
                    </option>
                    @endif
                   
                @endforeach
           </select></td>
            <td><input type="text" name="adicionar[0][cantidad]" placeholder="Ingrese Una Cantidad" class="form-control" /></td>
        </tr>
    </table>
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  <a href="{{route('pedidohs.index')}}"  class="btn btn-sm btn-primary">Volver</a>
  </div>
