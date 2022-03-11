@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear Herramienta
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'pedidoherras.store']) !!}

                    @include('pedidoherras.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
