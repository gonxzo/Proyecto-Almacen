@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        PROYECTOS
                    </div>
                    <div class="card-body">
                        @can('proyectos.create')
                            <a href="{{ route('proyectos.create') }}" class="btn btn-sm btn-primary mb-1">Nuevo Proyecto</a>
                        @endcan

                        <br>
                        <div class="table-responsive">
                            <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Proyecto</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Fecha Entrega</th>
                                        @can('proyectos.show')
                                            <th scope="col">Mostrar</th>
                                        @endcan
                                        @can('proyectos.edit')
                                            <th scope="col">Editar</th>
                                        @endcan
                                        @can('proyectos.destroy')
                                            <th scope="col">Eliminar</th>
                                        @endcan

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $item)
                                        <tr>
                                            <td>{{ $item->nombre }} </td>
                                            <td>{{ $item->tipo }} </td>
                                            <td>{{ $item->fechae }} </td>
                                            @can('proyectos.show')
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
                                                                    <p><strong>Nombre del Proyecto:</strong>
                                                                        {{ $item->nombre }}
                                                                    </p>
                                                                    <p><strong>Tipo de Proyecto: </strong>
                                                                        {{ $item->tipo }}</p>
                                                                    <p><strong>Superficie a Construir: </strong>
                                                                        {{ $item->superficieutil }}</p>
                                                                    <p><strong>Descripcion del Proyecto: </strong>
                                                                        {{ $item->tipo }}</p>
                                                                    <p><strong>Tipo de Proyecto: </strong>
                                                                        {{ $item->descripcion }}</p>
                                                                    <p><strong>Fecha Inicio de la Obra: </strong>
                                                                        {{ $item->fechai }}</p>
                                                                    <p><strong>Fecha de Finalizacion de la Obra: </strong>
                                                                            {{ $item->fechae }}</p>
                                                                    <p><strong>Fecha de Entrega de la Obra: </strong>
                                                                        {{ $item->fechae }}</p>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endcan
                                            @can('proyectos.edit')
                                                <td width=10px>
                                                    <a href="{{ route('proyectos.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>

                                                </td>
                                            @endcan
                                            @can('proyectos.destroy')
                                                <td width=10px>
                                                    {!! Form::open(['route' => ['proyectos.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                                    {!! Form::close() !!}
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
