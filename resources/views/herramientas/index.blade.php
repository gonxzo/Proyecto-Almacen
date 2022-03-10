
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
                <a href="{{route('herramientas.create')}}"  class="btn btn-sm btn-primary mb-1">Crear Nuevo Registro</a>
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
                                <th scope="col">Mostrar</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($herramientas as $item)
                            <tr>
                                
                                <td >{{$item->descripcion }} </td>
                                <td >{{$item->unidad }} </td>
                                <td >{{$item->cantidad }} </td>
                                @foreach ($clasherramientas as $clas)
                                    @if($clas->id == $item->idclasificacion)
                                    <td >{{$clas->descripcion }} </td>

                                    @endif
                               @endforeach
                                
                                <td width = 10px>
                                    @can('herramientas.show')
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
                                                    <p><strong>Nombre de la Herramienta:</strong> {{$item->descripcion}}</p>
                                                    <p><strong>Unidad de Medida: </strong> {{$item->unidad}}</p>
                                                    <p><strong>Cantidad Existente: </strong> {{$item->cantidad}}</p>
                                                    @foreach ($clasherramientas as $clas)
                                                        @if($clas->id == $item->idclasificacion)
                                                            <p><strong>Tipo de Herramienta: </strong> {{$clas->descripcion}}</p>

                                                        @endif
                                                    @endforeach
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endcan
                                </td>
                                <td width = 10px>
                                    @can('herramientas.edit')
                                    <a href="{{route('herramientas.edit',$item->id)}}" class="btn btn-sm btn-info">Editar</a>
                                    @endcan
                                </td>
                                <td width=10px>
                                    @can('herramientas.destroy')
                                    {!!Form::open(['route'=>['herramientas.destroy',$item->id],'onclick'=> "return confirm('Esta Seguro de Eliminar este Registro')",'method'=> 'DELETE'])!!}
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