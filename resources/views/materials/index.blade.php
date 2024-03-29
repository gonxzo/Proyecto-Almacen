@extends('adminlte::page')

@section('title', 'PEÑA - ANDRADE')
@section('plugins.Datatables, true')
@section('content_header')
    <img src="img/imagen.jpg" height="100px" width="100%">
@stop
@section('content')
    
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        MATERIAL GENERAL
                    </div>
                    <div class="card-body">
                        @can('proyectos.create')
                            <a href="{{ route('materials.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo
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
                                        @can('materials.show')
                                            <th scope="col">Mostrar</th>
                                        @endcan
                                        @can('materials.edit')
                                            <th scope="col">Editar</th>
                                        @endcan
                                        @can('materials.destroy')
                                            <th scope="col">Eliminar</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materials as $item)
                                        <tr>
                                            <td>{{ $item->descripcion }} </td>
                                            <td>{{ $item->unidad }} </td>
                                            <td>{{ $item->cantidad }} </td>
                                            @can('materials.show')
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
                                                                    <p><strong>Nombre del Material:</strong>
                                                                        {{ $item->descripcion }}</p>
                                                                    <p><strong>Unidad: </strong> {{ $item->unidad }}</p>
                                                                    <p><strong>Cantidad: </strong> {{ $item->cantidad }}</p>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            @endcan
                                            @can('materials.edit')
                                                <td width=10px>
                                                    <a href="{{ route('materials.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>
                                                </td>
                                            @endcan
                                            @can('materials.destroy')
                                            <td width=10px>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#modal2{{ $item->id }}">
                                                Eliminar
                                            </button>
                                            <div class="modal fade" id="modal2{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/imgeliminar.jpg"
                                                                width="50"
                                                                height="50">
                                                            ¿Desea Eliminar el Proyecto y todos sus Registros...?
                                                            <div class="modal-footer">
                                                                {!! Form::open(['route' => ['materials.destroy', $item->id], 'method' => 'DELETE']) !!}
                                                                <button class="btn btn-sm btn-info">Eliminar</button>
                                                                {!! Form::close() !!}
                                                                <button type="button" class="btn btn-sm btn-info"
                                                                    data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

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
   
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop