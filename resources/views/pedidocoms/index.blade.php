@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        PEDIDO MATERIALES
                    </div>
                    <div class="card-body">
                        <a href="{{ route('pedidocoms.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo
                            Pedido</a>
                        {{-- <a href="{{ route('pedidocoms.create') }}" class="btn btn-sm btn-primary mb-1">Reporte Por
                            Fecha</a> --}}
                        
                            <br>
                            <div class="table-responsive">
                                <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nro. Pedido</th>
                                            <th scope="col">Trabajador</th>
                                            <th scope="col">Cargo</th>
                                            <th scope="col">Fecha Pedido</th>
                                            <th scope="col">Reporte</th>
                                            <th scope="col">Mostrar</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pedidocoms as $item)
                                            <tr>
                                                <td>{{ $item->id }} </td>
                                                @foreach ($trabajadors as $trab)
                                                    @if ($item->idtrab == $trab->id)
                                                        <td>{{ $trab->nombre }} {{ $trab->apellidos }} </td>
                                                        <td>{{ $trab->cargo }} </td>
                                                    @endif
                                                @endforeach
                                                <td>{{ $item->created_at }} </td>
                                                <td width=10px>
                                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                        data-target="#modal{{ $item->id }}">
                                                        Reporte
                                                    </button>
                                                    <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <embed src="{{ route('pedidocoms.pdf', $item->id) }}"
                                                                        type="application/pdf" width="100%"
                                                                        height="750px" />
                                                                    {{-- <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td width=10px>
                                                    @can('pedidocoms.show')
                                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                            data-target="#modalvista{{ $item->id }}">
                                                            Visualizar
                                                        </button>
                                                        <div class="modal fade" id="modalvista{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                                                            DESCRIPCION DEL PROYECTO</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p><strong>Numero del Pedido:</strong>
                                                                            {{ $item->id }}
                                                                        </p>
                                                                        @foreach ($trabajadors as $trab)
                                                                            @if ($item->idtrab == $trab->id)
                                                                                <p><strong>Nombre del Trabajador: </strong>
                                                                                    {{ $trab->nombre }}
                                                                                    {{ $trab->apellidos }}</p>
                                                                                <p><strong>Cargo del Trabajador: </strong>
                                                                                    {{ $trab->cargo }}</p>
                                                                                <p><strong>Edad del Trabajador: </strong>
                                                                                    {{ $trab->edad }}</p>
                                                                            @endif
                                                                        @endforeach
                                                                        <p><strong>Fecha del Pedido: </strong>
                                                                            {{ $item->created_at }}</p>
                                                                        @foreach ($pedidos as $ped)
                                                                            @if ($item->id == $ped->idtrab)
                                                                                @foreach ($materials as $mat)
                                                                                    @if ($ped->idtrab == $mat->id)
                                                                                        <p><strong>Material Solicitado:
                                                                                            </strong>
                                                                                            {{ $mat->descripcion }}</p>
                                                                                        <p><strong>Cantidad Solicitada</strong>
                                                                                            {{ $ped->cantidad }}</p>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Cerrar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endcan
                                                </td>
                                                <td width=10px>
                                                    @can('pedidocoms.edit')
                                                        <a href="{{ route('pedidocoms.edit', $item->id) }}"
                                                            class="btn btn-sm btn-info">Editar</a>
                                                    @endcan
                                                </td>
                                                <td width=10px>
                                                    @can('pedidocoms.destroy')
                                                        {!! Form::open(['route' => ['pedidocoms.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
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
