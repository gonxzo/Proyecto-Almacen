@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   EDITAR CLASIFICACION HERRAMIENTA
                </div>
                <div class="card-body">

                    {!! Form::model($clasherramienta, ['route'=>['clasherramientas.update',$clasherramienta->id],'method'=>'PUT' ]) !!}
                    @include('clasherramientas.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
