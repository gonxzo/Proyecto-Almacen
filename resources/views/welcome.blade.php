@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  pedido
                </div>
                <form action="{{ url('store-input-fields') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>trabajador</th>
                            <th>material</th>
                            <th>cantidad</th>
                        </tr>
                       
                        <tr>
                            <td> <select class="form-control" name="addMoreInputFields[0][idtrab]" >
                                @foreach($trabajadors as $item)
                                     <option value="{{$item['id']}}">{{$item['nombre']}} {{$item['apellidos']}} 
                                     </option>
                                @endforeach
                           </select></td>
                            <td> <select class="form-control" name="addMoreInputFields[0][material]" >
                                @foreach($materials as $item)
                                     <option value="{{$item['id']}}">{{$item['descripcion']}} 
                                     </option>
                                @endforeach
                           </select></td>
                            <td><input type="text" name="addMoreInputFields[0][cantidad]" placeholder="Enter subject" class="form-control" /></td>
                          
                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Adicionar</button></td>
                        </tr>
                        
                    </table>
                    <button type="submit" class="btn btn-outline-success btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

