@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        CLASIFICACION DE HERRAMIENTAS
                    </div>
                    <div class="card-body">
                        @can('clasherramientas.create')
                            <a href="{{ route('clasherramientas.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo
                                Registro</a>
                            <br>
                        @endcan
                        <div class="table-responsive">
                            <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                                <thead>
                                    <tr class="grid">
                                        <th scope="col">Clasificacion</th>
                                        @can('clasherramientas.show')
                                            <th scope="col">Mostrar</th>
                                        @endcan
                                        @can('clasherramientas.edit')
                                            <th scope="col">Editar</th>
                                        @endcan
                                        @can('clasherramientas.destroy')
                                            <th scope="col">Eliminar</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clasherramientas as $item)
                                        <tr>
                                            <td>{{ $item->descripcion }} </td>
                                            @can('clasherramientas.show')
                                                <td width=10px>
                                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                        data-target="#modal{{ $item->id }}">
                                                        Mostrar
                                                    </button>
                                                    <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        DESCRIPCION DEL PROYECTO</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><strong>Clsificacion de la Herramienta:</strong>
                                                                        {{ $item->descripcion }}</p>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            @endcan
                                            @can('clasherramientas.edit')
                                                <td width=10px>
                                                    <a href="{{ route('clasherramientas.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>
                                                </td>
                                            @endcan
                                            @can('clasherramientas.destroy')
                                                <td width=10px>
                                                    {!! Form::open(['route' => ['clasherramientas.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
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
