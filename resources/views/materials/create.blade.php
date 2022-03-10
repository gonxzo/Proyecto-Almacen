@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    AGREGAR MATERIAL
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'materials.store']) !!}

                    @include('materials.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
