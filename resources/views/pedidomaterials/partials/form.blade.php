<div class="card-header"></div>
<div class="form-row">

    <div class="form-group col-md-3">
        <strong>{!! Form::label('detalle', 'Nro. de Pedido') !!}</strong><br>
        <input type="text" name="idregpedido" value="{{ Auth::User()->id }}" class="form-control" />
        
    </div>
    <div class="form-group col-md-5">
        <strong>{!! Form::label('asunto', 'PERSONAL A CARGO DEL ALMACEN') !!}</strong><br>
        {{ Auth::User()->name }}<br>
        
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
                    <li>{{ 'LLenar los Campos Material y Cantidad del Formulario' }}</li>
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
    <table class="table table-bordered" id="dynamicAddRemove3">
    @endif
    @if (Auth::user()->id == 46)
    <table class="table table-bordered" id="dynamicAddRemove4">
    @endif
    @if (Auth::user()->id == 45)
    <table class="table table-bordered" id="dynamicAddRemove5">
    @endif
    @if (Auth::user()->id == 22)
    <table class="table table-bordered" id="dynamicAddRemove6">
    @endif
    
        <tr>
            <th>MATERIAL EN ALMACEN</th>
            <th>CANTIDAD A SALIR</th>
        </tr>
        <tr>
            <td> <select class="form-control" name="addMoreInputFields[0][material]">
                    @foreach ($trabajadors as $trab)
                       @if ($trab->idusuario == Auth::User()->id)
                       
                            @foreach ($regpedidomaterials as $pedcom)
                                @if ($pedcom->idtrabajador == $trab->id)
                               
                                    @foreach ($pedidomaterials as $pedido)
                                        @if ($pedido->idregpedido == $pedcom->id)
                                      
                                            @foreach ($materials as $material)
                                                @if ($material->id == $pedido->idmaterial)
                                                    <option value="{{ $material['id'] }}">{{ $material['descripcion'] }}
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
            <td><input type="text" name="addMoreInputFields[0][cantidad]" placeholder="Ingrese Una Cantidad"
                    class="form-control" /></td>
        </tr>
    </table>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('pedidos.index') }}" class="btn btn-sm btn-primary">Volver</a>
    </div>
