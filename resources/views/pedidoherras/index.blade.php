
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Herramientas Almacen
            </div>
            <div class="card-body">
                <a href="{{ route('pedidohs.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo Pedido</a>
                <div class="table-responsive">
                    <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                        <thead>
                            <tr class="grid">
                                <th scope="col">Nº Pedido</th>
                                <th scope="col">Herramienta</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">U. Medida</th>
                                <th scope="col">Mostrar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidoherras as $item)
                            <tr>
                                <td >{{$item->idph }} </td>
                              
                                @foreach ($herramientas as $herras )
                                    @if ($herras->id == $item->herramienta)
                                    <td >{{$herras->descripcion }} </td>
                                    <td >{{$item->cantidad }} </td>
                                    <td >{{$herras->unidad }} </td>
                                    @endif
                                @endforeach
                                @can('pedidoherras.show')
                                <td width = 10px>
                                    
                                    <button  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal{{$item->id}}">
                                        Visualizar
                                    </button>
                                    <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">DESCRIPCION DE LA HERRAMIENTA</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Numero del Pedido:</strong> {{$item->idph}}</p>
                                                    @foreach ($herramientas as $herras )
                                                        @if ($herras->id == $item->herramienta)
                                                        <p><strong>Nombre de la Herramienta:</strong> {{$herras->descripcion}}</p>
                                                        <p><strong>Cantidad de Herramientas:</strong> {{$item->cantidad}}</p>
                                                        <p><strong>Unidad de Medida de la Herramienta</strong> {{$herras->unidad }}</p>
                                                        
                                                        @endif
                                                    @endforeach
                                                    <p><strong>Fecha del Registro: </strong> {{$item->created_at}}</p>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                </td>
                                @endcan
                                @can('pedidoherras.destroy')
                                <td width=10px>
                                    {!!Form::open(['route'=>['pedidoherras.destroy',$item->id],'onclick'=> "return confirm('Esta Seguro de Eliminar este Registro')",'method'=> 'DELETE'])!!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
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