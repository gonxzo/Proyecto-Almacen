@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    EDITAR ERRAMIENTA
                </div>
                <div class="card-body">

                    {!! Form::model($herramienta, ['route'=>['herramientas.update',$herramienta->id],'method'=>'PUT' ]) !!}
                    @include('herramientas.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
