@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    CREAR CLASIFICACION DE HERRAMIENTA
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'clasherramientas.store']) !!}

                    @include('clasherramientas.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
