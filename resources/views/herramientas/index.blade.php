@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        HERRAMIENTAS EN GENERAL
                    </div>
                    <div class="card-body">
                        @can('herramientas.create')
                            <a href="{{ route('herramientas.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo
                                Registro</a>
                            <br>
                        @endcan
                        <div class="table-responsive">
                            <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                                <thead>
                                    <tr class="grid">
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Unidad</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Item</th>
                                        @can('herramientas.show')
                                            <th scope="col">Mostrar</th>
                                        @endcan
                                        @can('herramientas.edit')
                                            <th scope="col">Editar</th>
                                        @endcan
                                        @can('herramientas.destroy')
                                            <th scope="col">Eliminar</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($herramientas as $item)
                                        <tr>
                                            <td>{{ $item->descripcion }} </td>
                                            <td>{{ $item->unidad }} </td>
                                            <td>{{ $item->cantidad }} </td>
                                            @foreach ($clasherramientas as $clas)
                                                @if ($clas->id == $item->idclasificacion)
                                                    <td>{{ $clas->descripcion }} </td>
                                                @endif
                                            @endforeach
                                            @can('herramientas.show')
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
                                                                    <p><strong>Nombre de la Herramienta:</strong>
                                                                        {{ $item->descripcion }}</p>
                                                                    <p><strong>Unidad de Medida: </strong> {{ $item->unidad }}
                                                                    </p>
                                                                    <p><strong>Cantidad Existente: </strong>
                                                                        {{ $item->cantidad }}</p>
                                                                    @foreach ($clasherramientas as $clas)
                                                                        @if ($clas->id == $item->idclasificacion)
                                                                            <p><strong>Tipo de Herramienta: </strong>
                                                                                {{ $clas->descripcion }}</p>
                                                                        @endif
                                                                    @endforeach
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            @endcan
                                            @can('herramientas.edit')
                                                <td width=10px>
                                                    <a href="{{ route('herramientas.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>
                                                </td>
                                            @endcan
                                            @can('herramientas.destroy')
                                                <td width=10px>
                                                    {!! Form::open(['route' => ['herramientas.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
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
