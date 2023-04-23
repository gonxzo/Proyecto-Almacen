@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Materiales
                </div>
                <div class="card-body">

                    {!! Form::model($pedidomaterial, ['route'=>['pedidomaterials.update',$pedidomaterial->id],'method'=>'PUT' ]) !!}
                    @include('pedidomaterials.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
