<div class="card-header"></div>
<div class="form-row">
    <div class="form-group col-md-2">
        <strong>{!! Form::label('asunto', 'Nro.') !!}</strong><br>
        <input type="text" name="idpedidoh" value="{{ Auth::User()->id }}" class="form-control" />
        
    </div>
  <div class="form-group col-md-6">
    <strong>{!! Form::label('asunto', 'PERSONAL A CARGO DEL ALMACEN') !!}</strong><br>
    {{ Auth::User()->name }}
</div>
<div class="form-group col-md-4">
    <strong>{!! Form::label('asunto', 'Nuevo Registro') !!}</strong><br>
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
    <table class="table table-bordered" id="addremove2">
        <tr>
            <th>Herramienta</th>
            <th>cantidad</th>
        </tr>
       
        <tr>
            <td> <select class="form-control" name="adicionar[0][herramienta]" >
              @foreach ($trabajadors as $trab)
              @if ($trab->idusuario == Auth::User()->id)
              
                   @foreach ($pedidohs as $pedcom)
                       @if ($pedcom->idtrab == $trab->id)
                      
                           @foreach ($pedidoherras as $ped)
                               @if ($ped->idph == $pedcom->id)
                             
                                   @foreach ($herramientas as $herramienta)
                                       @if ($herramienta->id == $ped->herramienta)
                                           <option value="{{ $herramienta['id'] }}">{{ $herramienta['descripcion'] }}
                                           </option>
                                       @endif
                                   @endforeach
                               @endif
                           @endforeach
                       @endif
                   @endforeach
               @endif
           @endforeach
           </select></td>
            <td><input type="text" name="adicionar[0][cantidad]" placeholder="Ingrese Una Cantidad" class="form-control" /></td>
        </tr>
    </table>
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  <a href="{{route('pedidoherras.index')}}"  class="btn btn-sm btn-primary">Volver</a>
  </div>
