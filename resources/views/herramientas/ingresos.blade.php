@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        INGRESO DE HERRAMIENTAS
                    </div>
                    <div class="card-body">
                        <div class="card-header"></div>
                        <form action="{{ url('store-input-fields') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Seleccione Las Herramientas</th>
                                    <th>Cantidad a ingresar</th>
                                </tr>
                                <tr>
                                    <td> <select class="form-control" name="addMoreInputFields[0][material]">
                                            @foreach ($herramientas as $item)
                                                <option value="{{ $item['id'] }}">{{ $item['descripcion'] }}
                                                </option>
                                            @endforeach
                                        </select></td>
                                    <td><input type="text" name="addMoreInputFields[0][cantidad]"
                                            placeholder="Enter subject" class="form-control" /></td>
                                    <td width='20'><button type="button" name="add" id="dynamic-ar"
                                            class="btn btn-sm btn-success">Adicionar</button></td>
                                </tr>
                            </table>
                            <div class="form-group">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-sm btn-primary']) !!}
                                <a href="{{route('herramientas.index')}}"  class="btn btn-sm btn-primary">VOLVER</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
