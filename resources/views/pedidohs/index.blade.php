@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        PEDIDO HERRAMIENTAS
                    </div>
                    <div class="card-body">
                        <a href="{{ route('pedidohs.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo Pedido</a>
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
                                        <th scope="col">Nro. Pedido</th>
                                        <th scope="col">Trabajador</th>
                                        <th scope="col">Cargo</th>
                                        <th scope="col">Fecha Pedido</th>
                                        <th scope="col">Reporte</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidohs as $item)
                                        <tr>
                                            <td>{{ $item->id }} </td>
                                            @foreach ($trabajadors as $trab)
                                                @if ($item->idtrab == $trab->id)
                                                   @foreach ($users as $user )
                                                       @if ($user->id == $trab->idusuario)
                                                       <td>{{ $user->name }} </td>
                                                       @endif
                                                   @endforeach
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
                                                                <embed src="{{ route('pedidohs.pdf', $item->id) }}"
                                                                    type="application/pdf" width="100%" 
                                                                    height="750px" />

                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td width=10px>
                                                @can('pedidohs.edit')
                                                    <a href="{{ route('pedidohs.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>
                                                @endcan
                                            </td>
                                            <td width=10px>
                                                @can('pedidohs.destroy')
                                                    {!! Form::open(['route' => ['pedidohs.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
