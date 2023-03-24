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
    

    @foreach ($pedidohs as $pedcom)
      
    <tr>
        @foreach ($trabajadors as $trab )
            @if ($trab->id == $pedcom->idtrab)
            
                @foreach ($users as $user )
                @if ($user->id == $trab->idusuario)
               
                <td style="text-align:left;width:100%; " colspan="4">
                    <strong>NOMBRE DEL TRABAJADOR: </strong><font size=3>{{$user->name }}</font>
                </td>
                 <td style="text-align:left;width:100%; " colspan="4">
                    <strong>NOMBRE DEL ALMACEN: </strong><font size=3>{{ $pedcom->asunto }}</font>
                </td>
                
                <tr>
                  <hr>
                    <td style="text-align:left;width:100%;" colspan="3">
                        <h5>HERRAMIENTAS</h5>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="3">
                        <h5>CANTIDAD</h5>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="3">
                        <h5>UNIDAD</h5>
                    </td>
                     <td style="text-align:left;width:100%;" colspan="3">
                        <h5>FECHA Y HORA</h5>
                    </td>
                </tr> 
                @foreach ($pedidoherras as $pedido)
                   @if ($pedido->idpedidoh == $pedcom->id)
                  
                    <tr>
                      
                        @foreach ($herramientas as $herramienta)
                            @if ($pedido->herramienta == $herramienta->id)
                            
                                <td style="text-align:left;width:100%; " colspan="3">
                                    <hr style="width: 100%;height: -20px;">
                                    <font size=1>{{ $herramienta->descripcion }}</font>
                                </td>
                                <td style="text-align:left;width:100%; " colspan="3">
                                    <hr style="width: 100%;height: -20px;">
                                    <font size=1>{{ $pedido->cantidad }}</font>
                                </td>
                                <td style="text-align:left;width:100%; " colspan="3">
                                    <hr style="width: 100%;height: -20px;">
                                    <font size=1>{{ $herramienta->unidad }}</font>
                                </td>
                            @endif
                        @endforeach
                       
                        <td style="text-align:left;width:100%; " colspan="3">
                            <hr style="width: 100%;height: -20px;">
                            <font size=1>{{ $pedido->created_at }}</font>
                        </td>
                    </tr>
                    @endif
                @endforeach
                @endif  
                @endforeach
          
            @endif
        @endforeach
    </tr>
    @endforeach
</table>
        
    <footer>
    </footer>
</body>

</html>
