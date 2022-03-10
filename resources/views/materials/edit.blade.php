@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    EDITAR MATERIAL
                </div>
                <div class="card-body">

                    {!! Form::model($material, ['route'=>['materials.update',$material->id],'method'=>'PUT' ]) !!}
                    @include('materials.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
