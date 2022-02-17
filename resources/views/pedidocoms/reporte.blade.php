@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                   REPORTE DE MATERIALES POR FECHA
                </div>
                <div class="card-body">
                    {!! Form::open(['route'=>'pedidocoms.reporte']) !!}
                    <strong> <h5>REPORTE DE MATERIALES</h5></strong>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <strong>{!! Form::label('fechaini', 'FECHA INICIO') !!}</strong>
                            {!! Form::date('fechaini', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
                        </div>
                    
                        <div class="form-group col-md-6">
                            <strong>{!! Form::label('fechafin', 'FECHA FINAL') !!}</strong>
                            {!! Form::date('fechafin', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
                        </div>
            
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <div class="modal fade" id="modal121" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <embed src="{{ route('pedidocoms.reportefechas') }}" type="application/pdf"
                                                width="100%" height="750px" />
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <div class="modal fade" id="modal12" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <embed src="{{ route('pedidocoms.reportespdf') }}" type="application/pdf"
                                                width="100%" height="750px" />
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#modal121">
                            GENERA REPORTE POR FECHAS
                        </button>
                        <button type="button" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#modal12">
                            GENERA REPORTE TOTAL
                        </button>
                    </div>
                    <strong> <H5>REPORTE DE HERRAMIENTAS</H5></strong>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <strong>{!! Form::label('fechaini', 'FECHA INICIO') !!}</strong>
                            {!! Form::date('fechaini', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
                        </div>
                    
                        <div class="form-group col-md-6">
                            <strong>{!! Form::label('fechafin', 'FECHA FINAL') !!}</strong>
                            {!! Form::date('fechafin', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
                        </div>
            
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <div class="modal fade" id="modal122" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <embed src="{{ route('pedidohs.reportefechas') }}" type="application/pdf"
                                                width="100%" height="750px" />
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <div class="modal fade" id="modal123" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <embed src="{{ route('pedidohs.reportespdf') }}" type="application/pdf"
                                                width="100%" height="750px" />
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#modal122">
                            GENERA REPORTE POR FECHAS
                        </button>
                        <button type="button" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#modal123">
                            GENERA REPORTE TOTAL
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

