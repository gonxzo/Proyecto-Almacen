
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Trabajadores
            </div>
            <div class="card-body">
                @can('trabajadors.create')
                <a href="{{route('trabajadors.create')}}"  class="btn btn-sm btn-primary mb-1">Crear Nuevo Registro</a>
                <br>
                @endcan

                <div class="table-responsive">
                    <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Trabajadores</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Mostrar</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trabajadors as $item)
                            <tr>
                                @foreach ($users as $user )
                                    @if ($user->id == $item->idusuario)
                                    <td >{{$user->name }}</td>
                                    @endif
                                @endforeach   
                                @foreach ($proyectos as $proy )
                                    @if ($proy->id == $item->idproyecto)
                                     <td >{{$proy->nombre }}</td>
                                    @endif
                                @endforeach                                
                                <td >{{$item->cargo }} </td>
                                <td width = 10px>
                                    @can('trabajadors.show')
                                    <button  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal{{$item->id}}">
                                        Mostrar
                                    </button>
                                    <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">DESCRIPCION DEL PROYECTO</h5>
                                                </div>
                                                <div class="modal-body">
                                                    @foreach ($users as $user )
                                                        @if ($user->id == $item->idusuario)
                                                        <p><strong>Nombre del Trabajador:</strong> {{$user->name}}</p>
                                                        @endif
                                                    @endforeach   
                                                    @foreach ($proyectos as $proy )
                                                        @if ($proy->id == $item->idproyecto)
                                                        <p><strong>Nombre del Proyecto: </strong> {{$proy->nombre}}</p>
                                                        @endif
                                                    @endforeach     
                                                    <p><strong>Cargo del Trabajador: </strong> {{$item->cargo}}</p>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endcan
                                </td>
                                <td width = 10px>
                                    @can('trabajadors.edit')
                                    <a href="{{route('trabajadors.edit',$item->id)}}" class="btn btn-sm btn-info">Editar</a>
                                    @endcan
                                </td>
                                <td width=10px>
                                    @can('trabajadors.destroy')
                                    {!!Form::open(['route'=>['trabajadors.destroy',$item->id],'onclick'=> "return confirm('Esta Seguro de Eliminar este Registro')",'method'=> 'DELETE'])!!}
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