@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   PEDIDO MATERIALES
                </div>
                <div class="card-body">

                    {!! Form::open(['route'=>'pedidocoms.store']) !!}

                    @include('pedidocoms.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @section('js')
    <script type="text/javascript" defer>
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td> <select class="form-control" name="addMoreInputFields[' + i +
                '][material]" >@foreach ($materials as $item) <option value=""> </option> @endforeach </select></td>" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' +
                i +
                '][cantidad]" placeholder="Enter cantidad" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endsection --}}

