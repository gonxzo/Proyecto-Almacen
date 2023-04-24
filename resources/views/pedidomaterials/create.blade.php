@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Materiales Por Obra
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'pedidomaterials.store']) !!}

                    @include('pedidomaterials.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



