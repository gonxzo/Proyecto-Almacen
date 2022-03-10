@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    CREAR PEDIDO DE HERRAMIENTAS
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'pedidohs.store']) !!}

                    @include('pedidohs.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
