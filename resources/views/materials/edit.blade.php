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
                    EDITAR MATERIAL
                </div>
                <div class="card-body">

                    {!! Form::model($material, ['route'=>['materials.update',$material->id],'method'=>'PUT' ]) !!}
                    @include('materials.partials.form')
                    {!! Form::close() !!}
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