
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
                @can('pedidoherras.create')
                <a href="{{ route('pedidoherras.create') }}" class="btn btn-sm btn-primary mb-1">Prestamo Herramientas</a>
                @endcan
                
                <button type="button" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#modal12">
                    Reporte Total
                </button>
                <div class="modal fade" id="modal12" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <embed src="{{ route('pedidohs.reportespdf') }}" type="application/pdf"
                                    width="100%" height="750px" />
 
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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
                            @foreach ($trabajadors as $trab)
                            @if ($trab->idusuario == Auth::user()->id)
                                @foreach ($pedidohs as $pedhs)
                                    @if ($pedhs->idtrab == $trab->id)
                                        @foreach ($pedidoherras as $item)
                                             @if ($item->idph == $pedhs->id)
                                             <tr>
                                                    <td>{{ $pedhs->asunto }} </td>
                                                    @foreach ($herramientas as $herramienta)
                                                        @if ($herramienta->id == $item->herramienta)
                                                            <td>{{ $herramienta->descripcion }} </td>
                                                            <td>{{ $herramienta->unidad }} </td>
                                                            <td>{{ $item->cantidad }} </td>
                                                        @endif
                                                    @endforeach
                                                    <td width=10px>
                                                        @can('pedidoherras.show')
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal"
                                                                data-target="#modal{{ $item->id }}">
                                                                Mostrar
                                                            </button>

                                                            <div class="modal fade"
                                                                id="modal{{ $item->id }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="exampleModalCenterTitle"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLongTitle">
                                                                                DESCRIPCION DEL PROYECTO</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p><strong>Numero del Pedido:</strong>
                                                                                {{ $item->idpedidocom }}</p>
                                                                            @foreach ($herramientas as $herramienta)
                                                                                @if ($herramienta->id == $item->herramienta)
                                                                                    <p><strong>Nombre
                                                                                            Material:</strong>
                                                                                        {{ $herramienta->descripcion }}
                                                                                    </p>
                                                                                    <p><strong>Cantidad del
                                                                                            material:</strong>
                                                                                        {{ $item->cantidad }}</p>
                                                                                    <p><strong>Unidad de Medida del
                                                                                            Material:</strong>
                                                                                        {{ $herramienta->unidad }}
                                                                                    </p>
                                                                                @endif
                                                                            @endforeach
                                                                            <p><strong>Fecha del Registro: </strong>
                                                                                {{ $item->created_at }}</p>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Cerrar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endcan
                                                    </td>
                                                    <td width=10px>
                                                        @can('pedidoherras.destroy')
                                                            {!! Form::open(['route' => ['pedidos.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                                            {!! Form::close() !!}
                                                        @endcan
                                                    </td>
                                                </tr>
                                                @endif
                                            
                                        @endforeach
                                    @endif
                                @endforeach
                            @else
                                @if (Auth::user()->id == 22)
                                @foreach ($pedidohs as $pedhs)
                                @if ($pedhs->idtrab == $trab->id)
                                    @foreach ($pedidoherras as $item)
                                         @if ($item->idph == $pedhs->id)
                                         <tr>
                                                <td>{{ $pedhs->asunto }} </td>
                                                @foreach ($herramientas as $herramienta)
                                                    @if ($herramienta->id == $item->herramienta)
                                                        <td>{{ $herramienta->descripcion }} </td>
                                                        <td>{{ $herramienta->unidad }} </td>
                                                        <td>{{ $item->cantidad }} </td>
                                                    @endif
                                                @endforeach
                                                <td width=10px>
                                                    @can('pedidoherras.show')
                                                        <button type="button" class="btn btn-sm btn-success"
                                                            data-toggle="modal"
                                                            data-target="#modal{{ $item->id }}">
                                                            Mostrar
                                                        </button>

                                                        <div class="modal fade"
                                                            id="modal{{ $item->id }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">
                                                                            DESCRIPCION DEL PROYECTO</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p><strong>Numero del Pedido:</strong>
                                                                            {{ $item->idpedidocom }}</p>
                                                                        @foreach ($herramientas as $herramienta)
                                                                            @if ($herramienta->id == $item->herramienta)
                                                                                <p><strong>Nombre
                                                                                        Material:</strong>
                                                                                    {{ $herramienta->descripcion }}
                                                                                </p>
                                                                                <p><strong>Cantidad del
                                                                                        material:</strong>
                                                                                    {{ $item->cantidad }}</p>
                                                                                <p><strong>Unidad de Medida del
                                                                                        Material:</strong>
                                                                                    {{ $herramienta->unidad }}
                                                                                </p>
                                                                            @endif
                                                                        @endforeach
                                                                        <p><strong>Fecha del Registro: </strong>
                                                                            {{ $item->created_at }}</p>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Cerrar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endcan
                                                </td>
                                                <td width=10px>
                                                    @can('pedidoherras.destroy')
                                                        {!! Form::open(['route' => ['pedidos.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endif
                                        
                                    @endforeach
                                @endif
                            @endforeach
                                @endif
                            @endif
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