@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pedido Completo
                </div>
                <div class="card-body">

                    {!! Form::model($pedidocom, ['route'=>['pedidocoms.update',$pedidocom->id],'method'=>'PUT' ]) !!}
                    @include('pedidocoms.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
