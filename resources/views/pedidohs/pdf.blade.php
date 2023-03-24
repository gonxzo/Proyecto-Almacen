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
        background-image: url(img/fondopdf.png) no-repeat;
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
        .nombre {
            position: absolute;
            bottom: 500px;
            left: 200px;
            top: 215px;
            z-index: 99999;
        }
        .envio {
            position: absolute;
            bottom: 500px;
            left: 200px;
            top: 245px;
            z-index: 99999;
        }
        .cargo {
            position: absolute;
            bottom: 500px;
            left: 530px;
            top: 215px;
            z-index: 99999;
        }
        .fecha {
            position: absolute;
            bottom: 500px;
            left: 200px;
            top: 280px;
            z-index: 99999;
            width: 300px;
        }
        .contenido {
            position: absolute;
            bottom: 500px;
            left: 10px;
            top: 350px;
            width: 100%;
            z-index: 99999;
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
            top: 1010px;
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
   
    <title>HERRAMIENTAS</title>
</head>

<body>
     <main>
        <div class='container'>
            <table width="100%">
                
                @foreach ($trabajadors as $trabajador)
                    @if ($pedidoh->idtrab == $trabajador->id)
                    @foreach ($users as $user )
                    @if ($user->id == $trabajador->idusuario)
                    <tr>
                        <td style="text-align:left;width:100%; " colspan="10">
                           <p class="nombre"> <font size=3><strong></strong>{{ $user->name }}</font></p>
                        </td>
                       </tr>
                    <tr>
                        
                    @endif
                @endforeach
                        <tr>
                            <td style="text-align:left;width:100%;" colspan="10">
                                <p class="envio"> {{ $pedidoh->asunto }}</font></p>
                            </td>
                          
                        </tr>
                        <tr>
                           
                            <td style="text-align:left;width:100%; border-color:rgb(12, 36, 104);;"colspan="4">
                                <p class="cargo"> {{ $trabajador->cargo }}</font></p>
                            </td>
                            <td style="text-align:left;width:100%;" colspan="4">
                                <p class="fecha">  {{ $pedidoh->created_at }}</font></p>
                            </td>
                           
                        </tr>
                    @endif
                @endforeach
                    </table>
                    <table class="contenido">
               
                <tr>
                    <td style="text-align:left;width:100%;" colspan="6">
                       
                        <p>
                        <h3>HERRAMIENTA</h3>
                        <hr style="width: 100%;height: 0.5px;">
                        </p>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="3">
                        
                        <p>

                        <h3>UNIDAD</h3>
                        <hr style="width: 100%;height: 0.5px;">
                        </p>
                    </td>
                    <td style="text-align:left;width:100%;" colspan="3">
                       
                        <p>

                        <h3>CANTIDAD</h3>
                        <hr style="width: 100%;height: 0.5px;">
                        </p>
                    </td>
                </tr>
               
                <tr>
                   
                    <td style="text-align:center;width:100%;" colspan="12">
                       
                        @foreach ($pedidoherras as $pedido)
                        
                            @if ($pedido->idph == $pedidoh->id)
                                @foreach ($herramientas as $herramienta)
                                
                                    @if ($pedido->herramienta == $herramienta->id)
                                    
                                    <tr>
                                        
                                        <td style="text-align:left;width:100%; " colspan="6">
                                            
                                            <font size=3>{{ $herramienta->descripcion }}</font>
                                                <hr style="width: 100%;height: 0.5px;">
                                        </td>
                                        <td style="text-align:left;width:100%; " colspan="3">
                                            
                                            <font size=3>{{ $herramienta->unidad }}</font>
                                            <hr style="width: 100%;height: 0.5px;">
                                        </td>
                                        <td style="text-align:center;width:100%; " colspan="3">
                                            <
                                            <font size=3>{{ $pedido->cantidad }}</font>
                                            <hr style="width: 100%;height: 0.5px;">
                                        </td>

                                    </tr>
                                    @endif
                                 @endforeach
                            @endif
                     @endforeach
                    </td>
                    
                    <tr>
                        <img id="firma" src="img/firma.png">
                        
                      
                        <td>
                            <img id="qr"
                                src="data:image/png;base64, {{ base64_encode(QrCode::size(130)->generate('CONSULTORA & CONSTRUCTORA PEÑA-ANDRADE - PLANILLA GENERAL DE LOS TRABAJADORES')) }} ">
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
