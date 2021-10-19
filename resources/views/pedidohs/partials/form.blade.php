<div class="card-header"></div>
<div class="form-row">
  <div class="form-group col-md-6">
    <strong>{!! Form::label('trabajador','nombre del trabajador') !!}</strong>
    <select class="form-control" name="idtrab" id="idtrab">
      @foreach($trabajadors as $trabajador)
           <option value="{{$trabajador['id']}}">{{$trabajador['nombre']}} {{$trabajador['apellidos']}} 
           </option>
      @endforeach
  </select>
  </div>

  <div class="form-group col-md-6">
  <strong>{!! Form::label('asunto','Motivo Pedido') !!}</strong>
      {!! Form::text('asunto', null, ['class'=> 'form-control','onKeyUp' => "this.value=this.value.toUpperCase();"]) !!}
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
    <table class="table table-bordered" id="addremove">
        <tr>
            <th>Herramienta</th>
            <th>cantidad</th>
        </tr>
       
        <tr>
            <td> <select class="form-control" name="adicionar[0][herramienta]" >
                @foreach($herramientas as $item)
                     <option value="{{$item['id']}}">{{$item['descripcion']}} 
                     </option>
                @endforeach
           </select></td>
            <td><input type="text" name="adicionar[0][cantidad]" placeholder="Enter subject" class="form-control" /></td>
          
            <td width='20'><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Adicionar</button></td>
        </tr>
        
    </table>
  
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
