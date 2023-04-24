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
                    AGREGAR MATERIAL
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'materials.store']) !!}

                    @include('materials.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    
@stop

@section('js')
    
@stop