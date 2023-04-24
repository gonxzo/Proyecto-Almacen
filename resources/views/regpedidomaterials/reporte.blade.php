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
                        <form action="{{ route('reporte') }} " method="POST">
                            @csrf
                            <strong>
                                <h5>REPORTE DE MATERIALES</h5>
                            </strong>
                            <div class="form-row"> 

                                <div class="form-group col-md-4">
                                    <strong>{!! Form::label('fechaini1', 'FECHA INICIO') !!}</strong>
                                    <input type="date" name="fechaini1" id="fechaini1" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <strong>{!! Form::label('fechafin1', 'FECHA FINAL') !!}</strong>
                                    <input type="date" name="fechafin1" id="fechafin1" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <strong>{!! Form::label('fechaini1', 'REPORTE') !!}</strong>
                                    <button type="submit" class="btn btn-sm btn-primary mb-1" data-toggle="modal"
                                    data-target="#modal121" value="Reporte por fechas">
                                    REPORTE MATERIALES</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="modal fade" id="modal121" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <embed src="{{ route('regpedidomaterials.reportefechas') }}"
                                                        type="application/pdf" width="100%" height="750px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                                
                        </form>
                        <form action="{{ route('reporteherras') }} " method="POST">
                            <strong>
                                <H5>REPORTE DE HERRAMIENTAS</H5>
                            </strong>
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <strong>{!! Form::label('fechaini', 'FECHA INICIO') !!}</strong>
                                    <input type="date" name="fechaini" id="fechaini" class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <strong>{!! Form::label('fechafin', 'FECHA FINAL') !!}</strong>
                                    <input type="date" name="fechafin" id="fechafin" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <strong>{!! Form::label('fechaini', 'REPORTE') !!}</strong>
                                    <button type="button" class="btn btn-sm btn-primary mb-1" data-toggle="modal"
                                    data-target="#modal122">
                                    REPORTE HERRAMIENTAS
                                </button>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="modal fade" id="modal122" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <embed src="{{ route('regpedidoherramientas.reportefechas') }}"
                                                        type="application/pdf" width="100%" height="750px" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
