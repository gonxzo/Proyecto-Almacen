@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR PROYECTO
                </div>
                <div class="card-body">

                    {!! Form::model($proyecto, ['route'=>['proyectos.update',$proyecto->id],'method'=>'PUT' ]) !!}
                    @include('proyectos.partials.form2')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
