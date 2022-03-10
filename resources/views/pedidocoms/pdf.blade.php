<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
           
        }

        body {
            margin-top: 0.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 0.5cm;
            background-color: #ffffff;
            padding: 20px;
        }

        header { 
            position: fixed;
            top: 1cm;
            left: 6.5cm;
            right: 0cm;
            height: 0.5cm;
            background-color: black;
            color: black;
            text-align: center;
            line-height: 0px;
            padding: 20px;
            margin: 8px;
            border: 0px solid black;
            float: Inherit;
            width: 270px;

        }



        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: rgb(12, 36, 104);
            color: white;
            text-align: center;
            line-height: 35px;
        }

      
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TABLA DE PRODUCTOS</title>
</head>


<body>
   
    
    <table width="100%">
        <tr>
            <td colspan="6" style="text-align:center;width:100%;">
                @include('pedidocoms.imagen')
            </td>
            <br>
            <td style="text-align:center;width:100%; size=1" colspan="6">
                <br>
                <P>
                <h3>CONSULTORA & CONSTRUCTORA PEÑA-ANDRADE </h3>
                <h3>REPORTE DE PEDIDOS</h3>
                </P>
            </td>
            
        </tr>
    </table>

    <main><hr style="width: 100%;height: 2px;">
        <h3 style="text-align:center;width:100%; height=1">TRABAJADOR Y LOS MATERIALES PEDIDOS</h3>
   
       <hr style="width: 100%;height: 2px;">
        <div class='container'>
            <table width="100%">
                
                @foreach ($trabajadors as $trabajador)
                    @if ($pedidocom->idtrab == $trabajador->id)
                        @foreach ($users as $user )
                            @if ($user->id == $trabajador->idusuario)
                            <tr>
                                <td style="text-align:left;width:100%; " colspan="10">
                                    <font size=3><strong>Nombre Trabajador: </strong>{{ $user->name }}</font>
                                </td>
                               </tr>
                            <tr>
                                
                            @endif
                        @endforeach
                       
                            <td style="text-align:left;width:100%;" colspan="10">
                                <font size=3><strong>Motivo: </strong>{{ $pedidocom->asunto }}</font>
                            </td>
                          
                        </tr>
                        <tr>
                           
                            <td style="text-align:left;width:100%; border-color:rgb(12, 36, 104);;"colspan="4">
                                <font size=3><strong>Cargo: </strong>{{ $trabajador->cargo }}</font>
                            </td>
                            <td style="text-align:left;width:100%;" colspan="4">
                                <font size=3><strong>Hora y Fecha: </strong>{{ $pedidocom->created_at }}</font>
                            </td>
                            <td style="text-align:left;width:100%; " colspan="4">
                                <font size=3><strong> Edad: </strong>{{ $trabajador->edad }} Años</font>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <hr style="width: 100%;height: 2px;">
               
                <tr>
                    <td style="text-align:left;width:100%;" colspan="6">
                        <hr style="width: 100%;height: 2px;">
                        <p>
                        <h4>MATERIAL</h4>
                        </p>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="3">
                        <hr style="width: 100%;height: 2px;">
                        <p>

                        <h4>UNIDAD</h4>
                        </p>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="3">
                        <hr style="width: 100%;height: 2px;">
                        <p>

                        <h4>CANTIDAD</h4>
                        </p>
                    </td>
                </tr>
               
                <tr>
                   
                    <td style="text-align:center;width:100%;" colspan="12">
                       
                        @foreach ($pedidos as $pedido)
                        
                            @if ($pedido->idpedidocom == $pedidocom->id)
                                @foreach ($materials as $material)
                                
                                    @if ($pedido->material == $material->id)
                                    
                                    <tr>
                                        
                                        <td style="text-align:left;width:100%; " colspan="6">
                                            <hr style="width: 100%;height: -20px;">
                                            <font size=2><strong>{{ $material->descripcion }}</font>
                                        </td>
                                        <td style="text-align:left;width:100%; " colspan="3">
                                            <hr style="width: 100%;height: -20px;">
                                            <font size=2><strong>{{ $material->unidad }}</font>
                                        </td>
                                        <td style="text-align:center;width:100%; " colspan="3">
                                            <hr style="width: 100%;height: -20px;">
                                            <font size=2>{{ $pedido->cantidad }}</font>
                                        </td>

                                    </tr>
                                    @endif
                                 @endforeach
                            @endif
                     @endforeach
                     <tr>
                        <td style="text-align:center;width:100%; " colspan="6">
                            <br><br><br><br><br>
                            <hr style="width: 50%;height: -20px; size:100px; color:blue">
                            <strong>Firma Trabajador</strong>
                            <strong></strong>
                        </td>
                        <td style="text-align:center;width:100%; " colspan="6">
                           <br><br><br><br><br>
                           <hr style="width: 50%;height: -20px; size:100px">
                            <strong>Firma Almacenero</strong>
                        </td>

                    </tr>               
                    </tr>
            </table>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
