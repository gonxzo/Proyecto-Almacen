@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    EDITAR TRABAJADOR
                </div>
                <div class="card-body">
                    {!! Form::model($trabajador, ['route'=>['trabajadors.update',$trabajador->id],'method'=>'PUT' ]) !!}
                    @include('trabajadors.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
