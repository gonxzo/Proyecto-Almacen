@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        INGRESO DE MATERIALES
                    </div>
                    <div class="card-body">


                        <div class="card-header"></div>
                        <form action="{{ url('material-cantidad') }}" method="GET">
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
                                    <th>Seleccione los Materiales</th>
                                    <th>Cantidad a Ingresar </th>
                                </tr>

                                <tr>
                                    <td> <select class="form-control" name="adicionar[0][material]">
                                            @foreach ($materials as $item)
                                                <option value="{{ $item['id'] }}">{{ $item['descripcion'] }}
                                                </option>
                                            @endforeach
                                        </select></td>
                                    <td><input type="text" name="adicionar[0][cantidad]"
                                            placeholder="Ingrese Cantidad" class="form-control" /></td>

                                    <td width='20'><button type="button" name="add" id="dynamic-ar"
                                            class="btn btn-sm btn-success">ADICIONAR</button></td>
                                </tr>

                            </table>

                            <div class="form-group">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-sm btn-primary']) !!}
                                <a href="{{route('materials.index')}}"  class="btn btn-sm btn-primary">VOLVER</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
