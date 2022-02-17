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
            padding: 50px;
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
            <td colspan="6" style="text-align:center;width:100%;;">
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

    <hr style="width: 100%;height: 2px;">
        <h4 style="text-align:center;width:100%; height=1">REPORTE MENSUAL DE MATERIALES SALIENTES</h4>
        
            <table width="100%">
                <hr style="width: 100%;height: 2px; ">
                <tr>
                    <td style="text-align:left;width:100%;" colspan="4">
                        <h5>MATERIAL</h5>
                    </td>
                    <td style="text-align:center;width:100%;" colspan="3">
                        <h5>CANTIDAD</h5>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="4">
                        <h5>UNIDAD</h5>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="5">
                        <h5>TRABAJADOR</h5>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="4">
                        <h5>FECHA Y HORA</h5>
                    </td>
                </tr>
                @foreach ($pedidos as $pedido)
                @if ($pedido->id >= 50)
                <tr>
                     @foreach ($materials as $material)
                                @if ($pedido->material == $material->id & $pedido->id >= 50)
                                    <td style="text-align:left;width:100%; " colspan="4">
                                        <hr style="width: 100%;height: -20px;">
                                        <font size=1>{{ $material->descripcion }}</font>
                                    </td>
                                    <td style="text-align:center;width:100%; " colspan="3">
                                        <hr style="width: 100%;height: -20px;">
                                        <font size=1>{{ $pedido->cantidad }}</font>
                                    </td>
                                    <td style="text-align:left;width:100%; " colspan="4">
                                        <hr style="width: 100%;height: -20px;">
                                        <font size=1>{{ $material->unidad }}</font>
                                    </td>
                                @endif
                            @endforeach
                            @foreach ($pedidocoms as $pedidocompleto )
                                @if ($pedidocompleto->id == $pedido->idtrab)
                                    
                                        @foreach ($trabajadors as $trabaja )
                                        @if ($trabaja->id == $pedidocompleto->idtrab)
                                        <td style="text-align:left;width:100%; " colspan="5">
                                            <hr style="width: 100%;height: -20px;">
                                            <font size=2>{{ $trabaja->nombre }} {{ $trabaja->apellidos }}</font>
                                        </td>
                                     @endif
                                    @endforeach
                                   
                                    
                                @endif
                           @endforeach
                           <td style="text-align:left;width:100%; " colspan="4">
                            <hr style="width: 100%;height: -20px;">
                            <font size=1>{{ $pedido->created_at }}</font>
                        </td>
                        </tr> 
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
                     

                                
                    </tr>
            </table>
        
    <footer>
    </footer>
</body>

</html>
