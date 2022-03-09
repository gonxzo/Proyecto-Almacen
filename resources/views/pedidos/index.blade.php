
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Materiales
            </div>
            <div class="card-body">
                <a href="{{ route('pedidocoms.create') }}" class="btn btn-sm btn-primary mb-1">GASTO MATERIALES</a>
                <button type="submit" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#modal12">
                    REPORTE TOTAL</button>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <div class="modal fade" id="modal12" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <embed src="{{ route('pedidocoms.reportespdf') }}" type="application/pdf"
                                                width="100%" height="750px" />
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                <div class="table-responsive">
                    <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                        <thead>
                            <tr class="grid">
                                <th scope="col">Almacen</th>
                                <th scope="col">Material</th>
                                <th scope="col">U. Medida</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Mostrar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $item)
                            <tr>
                                <td >{{$item->idpedidocom }} </td>
                                @foreach ($materials as $material )
                                    @if ($material->id == $item->material)
                                    <td >{{$material->descripcion }} </td>
                                    <td >{{$material->unidad }} </td>
                                    <td >{{$item->cantidad }} </td>
                                    @endif
                                @endforeach
                                <td width = 10px>
                                    @can('pedidos.show')
                                    <button  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal{{$item->id}}">
                                        Visualizar
                                    </button>
                                    
                                    <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">DESCRIPCION DEL PROYECTO</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Numero del Pedido:</strong> {{$item->idpedidocom}}</p>
                                                    @foreach ($materials as $material )
                                                        @if ($material->id == $item->material)
                                                        <p><strong>Nombre Material:</strong> {{$material->descripcion}}</p>
                                                        <p><strong>Cantidad del material:</strong> {{$item->cantidad}}</p>
                                                        <p><strong>Unidad de Medida del Material:</strong> {{$material->unidad }}</p>
                                                        
                                                        @endif
                                                    @endforeach
                                                    <p><strong>Fecha del Registro: </strong> {{$item->created_at}}</p>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endcan
                                </td>
                                <td width=10px>
                                    @can('pedidos.destroy')
                                    {!!Form::open(['route'=>['pedidos.destroy',$item->id],'onclick'=> "return confirm('Esta Seguro de Eliminar este Registro')",'method'=> 'DELETE'])!!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                            </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection