@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        PEDIDO HERRAMIENTAS
                    </div>
                    <div class="card-body">

                        {!! Form::model($pedidoh, ['route' => ['pedidohs.update', $pedidoh->id], 'method' => 'PUT']) !!}
                        @include('pedidohs.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
