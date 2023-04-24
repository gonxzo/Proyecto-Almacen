<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
           
        }

        body {
            width:100%;
  
  margin-top: 0.5cm;
  margin-left: 1cm;
  margin-right: 1cm;
  margin-bottom: 0.5cm; 
  background-image: url(img/fondopdf2h.png);
  background-repeat:no-repeat;
  background-color: #ffffff;
  padding: 10px;
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
        #qr {
            position: absolute;
            width: 110px;
            height: 110px;
            background-image: url("../img/pin1.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 6px;
            border: solid rgba(255, 255, 255, 1.0) 3px;
            box-shadow: 0 1px 7px #999;
            bottom: 500px;
            right: -30px;
            top: 597px;
            z-index: 99999;
        }

        #firma {
            position: absolute;
            bottom: 500px;
            left: 50px;
            top: 670px;
            z-index: 99999;
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
    
    <title>TABLA DE PRODUCTOS</title>
</head>


<body>
    <br><br>   <br><br>  <br><br>   <br><br>
     <table width="100%">
   
      
    

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
                                    <hr style="width: 100%;height: 0px;">
                                    <font size=1>{{ $herramienta->descripcion }}</font>
                                </td>
                                <td style="text-align:left;width:100%; " colspan="3">
                                    <hr style="width: 100%;height: 0px;">
                                    <font size=1>{{ $pedido->cantidad }}</font>
                                </td>
                                <td style="text-align:left;width:100%; " colspan="3">
                                    <hr style="width: 100%;height: 0px;">
                                    <font size=1>{{ $herramienta->unidad }}</font>
                                </td>
                            @endif
                        @endforeach
                       
                        <td style="text-align:left;width:100%; " colspan="3">
                            <hr style="width: 100%;height: 0px;">
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
<table>
    <tr>
            <img id="firma" src="img/firma.png">
        <td>
            <img id="qr"
                src="data:image/png;base64, {{ base64_encode(QrCode::size(130)->generate('CONSULTORA & CONSTRUCTORA PEÑA-ANDRADE - PLANILLA GENERAL DE LOS TRABAJADORES')) }} ">
        </td>
    </tr>       
</table>
    <footer>
    </footer>
</body>

</html>
