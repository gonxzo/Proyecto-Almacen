<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('Credenciales', 'Credenciales') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilonav.css') }}" rel="stylesheet">
    {{-- DATATABLES --}}
    <link href="{{ asset('css/cruds/4.1.3-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cruds/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cruds/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/cruds/1.9.1-jquery.js') }}" ></script>
    <script src="{{ asset('js/cruds/1.19.0-jquery.validate.js') }}" defer></script>
    <script src="{{ asset('js/cruds/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/cruds/4.1.3-js-bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/cruds/dataTables.bootstrap4.min.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark navbar-expand-md  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('autoridads') }}">
                    <img src="{{asset('img/icono2.png')}}" class="img-thumbnail" alt="...">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">
                        @can('menu.menuregion')
                        <li class="nav-item dropdown  ">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="{{route('menuregion')}}" role="button" aria-haspopup="true" aria-expanded="false">TERRITORIO</a>
                             <div class="dropdown-menu" style="background-color: #343A40">
                                @can('departamentos.index')
                                    <a class="nav-link" href="{{route('departamentos.index')}} ">DEPARTAMENTOS</a>
                                @endcan
                                @can('provincias.index')
                                    <a class="nav-link" href="{{route('provincias.index')}} ">PROVINCIAS</a>
                                @endcan
                                @can('municipios.index')
                                    <a class="nav-link" href="{{route('municipios.index')}} ">MUNICIPIOS</a>
                                @endcan
                                @can('municipios.index')
                                <a class="nav-link" href="{{route('nacions.index')}} ">NACIONES Y PUEBLOS INDIGENAS</a>
                            @endcan

                            </div>
                        </li>
                        @endcan
                        @can('menu.menucandidato')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('menucandidato')}}" role="button" aria-haspopup="true" aria-expanded="false">CANDIDATOS Y AUTORIDADES</a>
                             <div class="dropdown-menu" style="background-color: #343A40">
                                @can('candidatos.index')
                                    <a class="nav-link" href="{{route('candidatos.index')}} ">CANDIDATOS</a>
                                @endcan
                                @can('autoridads.index')
                                    <a class="nav-link" href="{{route('autoridads.index')}} ">AUTORIDADES</a>
                                @endcan
                                @can('cargos.index')
                                    <a class="nav-link" href="{{route('cargos.index')}} ">CARGOS</a>
                                @endcan
                                @can('npiocs.index')
                                    <a class="nav-link" href="{{route('npiocs.index')}} ">NPIOC</a>
                                @endcan
                                @can('historico.index')
                                <a class="nav-link" href="{{route('historico.index')}} ">HISTORICO</a>
                                @endcan
                                @can('resolucion.index')
                                    <a class="nav-link" href="{{route('resolucion.index')}} ">RESOLUCIÓN</a>
                                @endcan
                                @can('auditorias.index')
                                    <a class="nav-link" href="{{route('auditorias.index')}} ">AUDITORIA</a>
                                @endcan
                            </div>
                        </li>
                        @endcan

                        @can('menu.menureporte')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('menureporte')}}" role="button" aria-haspopup="true" aria-expanded="false">REPORTE MUNICIPIO</a>
                             <div class="dropdown-menu" style="background-color: #343A40">
                                @can('credencial.index')
                                <a class="nav-link" href="{{route('credencial')}} ">CREDENCIALES</a>
                             @endcan
                            @can('composicion.filtros')
                                <a class="nav-link" href="{{route('composicion')}} ">COMPOSICION</a>
                            @endcan
                            @can('antecedentes.filtros')
                                <a class="nav-link" href="{{route('antecedente')}} ">ANTECEDENTES</a>
                            @endcan
                            </div>
                        </li>
                        @endcan
                        @can('menu.menugobernacion')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('menugober')}}" role="button" aria-haspopup="true" aria-expanded="false">REPORTE GOBERNACION</a>
                            <div class="dropdown-menu" style="background-color: #343A40">
                                <a class="nav-link" href="{{route('credencial_gobernacion')}} ">CREDENCIAL GOBERNACION</a>
                                <a class="nav-link" href="{{route('buscador_composicion_territorio.index')}} ">COMPOSICION POR TERRITORIO</a>
                                <a class="nav-link" href="{{route('buscador_composicion_poblacion.index')}} ">COMPOSICION POR POBLACION</a>
                                <a class="nav-link" href="{{route('credencial_npioc')}} ">CREDENCIAL NPIOC</a>
                                <a class="nav-link" href="{{route('buscador_composicion_npioc.index')}} ">COMPOSICION NPIOC</a>
                            </div>
                        </li>
                        @endcan
                        @can('menu.menurol')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('menurol')}}" role="button" aria-haspopup="true" aria-expanded="false">ROLES Y USUARIOS</a>
                             <div class="dropdown-menu" style="background-color: #343A40">
                                 @can('roles.index')
                                    <a class="nav-link" href="{{route('roles.index')}} ">ROLES</a>
                                 @endcan
                                 @can('users.index')
                                    <a class="nav-link" href="{{route('users.index')}} ">USUARIOS</a>
                                @endcan
                                @can('personal.index')
                                <a class="nav-link" href="{{route('personal.index')}} ">PERSONAL TED</a>
                                @endcan
                            </div>
                        </li>
                        @endcan

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-white" >
                  Historial Cambios y autoridades
                </div>
                <div class="card-body">

                  <br>
                  <table class="table table-striped table-bordered" id="hisautoridads">
                    <thead>
                        <tr class="grid">
                        <!--th scope="col" >#</th>
                        <th scope="col">CANDIDATO</th>
                        <th scope="col">CARGO</th>
                        <th scope="col">HABILITADO</th>
                        <th scope="col">OBSERVACIONES</th-->
                        <th scope="col">Autoridad</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Fecha Solicitud</th>
                        <th scope="col">Fecha Respuesta</th>
                        <th scope="col">IsHabilitado</th>
                        <th scope="col">Resolucion</th>
                        <!--th scope="col">Credencial</th-->
                        <th scope="col">Mostrar</th>
                        <!--th scope="col">editar</th>
                        <th scope="col">eliminar</th-->
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" defer>
$(document).ready(function () {
    function cambiarNull(x)
    {
       return (x !== null ? x : '')
    } 
$.fn.dataTable.ext.errMode = 'none';
    
var table = $('#hisautoridads').DataTable({
processing: true,
serverSide: false,
"language": {
    "url": "{{ asset('js/Spanish.plug-in.1.10.16.json') }}"
},
"order": [[ 0, "asc" ]],
ajax: "{{ route('historico.index') }}",
columns: [

{ data: 'Nombres', name: 'Nombres', render:function(data, type, row){
    var formatted = cambiarNull(row.Nombres)+" "+cambiarNull(row.PrimerApellido)+" "+cambiarNull(row.SegundoApellido);
    return formatted
}},
{ data: 'NombreCargo', name: 'NombreCargo', render:function(data, type, row){
    var formatted = cambiarNull(row.NombreCargo)+" "+cambiarNull(row.Titularidad)+" "+cambiarNull(row.Posicion);
    return formatted
}},

{
    data: 'HisFechaSolicitud',
    name: 'HisFechaSolicitud'
},
{
    data: 'HisFechaRespuesta',
    name: 'HisFechaRespuesta'
},
{
    data: 'HisIsHabilitado',
    name: 'HisIsHabilitado'
},
{
    data: 'IdHistorico',
    name: 'IdHistorico',
    render: function (data, type, row) {
        var ida = row.IdHistorico;
        var idocu = row.HisDocumentoAdjunto;
        var result = "<button  type='button' class='btn btn-secondary btn-sm' data-toggle='modal' data-target='#modal_ida'>RESOLUCION</button>"+
        "<div class='modal fade' id='modal"+row.IdHistorico+"' data-backdrop='static' data-keyboard='false' tabindex='-1' aria-hidden='true'>"
        +"<div class='modal-dialog modal-xl'>"
        +"<div class='modal-content'>"
        +"<div class='modal-header'>"
        +"<h5 class='modal-title' id='staticBackdropLabel'>"+"Resolución"+"</h5>"
        +"</div>"
        +"<div class='modal-body'>"
        +"<embed src='{{asset('storage'.'/'.'_idocu')}}' type='application/pdf' width='100%' height='600px' />"
        +"</div>"
        +"<div class='modal-footer'>"
        +"<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>"
        +"</div>"
        +"</div>"
        +"</div>"
        +"</div>";
        var url = result.replace('_ida', ida);
        url = url.replace('_idocu', idocu);
        console.log(url);
        return url;
    }
},
{
    data: 'IdHistorico',
    name: 'IdHistorico',
    render: function (data, type, row) {
        var ida = row.IdHistorico;
        var result = "<button  type='button' class='btn btn-sm btn-success' data-toggle='modal' data-target='#mostrar_ida'>Mostrar</button>"+
        "<div class='modal fade' id='mostrar"+row.IdHistorico+"' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>"
        +"<div class='modal-dialog modal-dialog-centered' role='document'>"
        +"<div class='modal-content'>"
        +"<div class='modal-header'>"
        +"<h5 class='modal-title' id='exampleModalLongTitle'>DETALLES DE: </h5>"
        +"</div>"
        +"<div class='modal-body'>"
        +"<p><strong>OBSERVACIÓN: </strong>"+cambiarNull(row.HisObservaciones)+"</p>"
        +"<p><strong>FECHA DE SOLICITUD: </strong>"+cambiarNull(row.HisFechaSolicitud)+"</p>"
        +"<p><strong>FECHA DE RESPUESTA: </strong>"+cambiarNull(row.HisFechaRespuesta)+"</p>"
        +"<p><strong>ESTA HABILITADO: </strong>"+cambiarNull(row.HisIsHabilitado)+"</p>"
        +"<p><strong>DETALLE DE HABILITACION: </strong>"+cambiarNull(row.HisDetalleIsHabilitado)+"</p>"
        +"<p><strong>ID CANDIDATO: </strong>"+cambiarNull(row.HisIdCandidato)+"</p>"
        +"<p><strong>CARGO: </strong>"+cambiarNull(row.NombreCargo)+"</p>"
        +"<p><strong>ESTA ACTIVO: </strong>"+cambiarNull(row.HisIsActivo)+"</p>"
        +"<div class='modal-footer'>"
        +"<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>"
        +"</div>"
        +"</div>"
        +"</div>"
        +"</div>"
        +"</div>";
        var url = result.replace('_ida', ida);
        return url;
    }
},
]
});
});
</script>

</html>
