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
            background-image: url(img/fondopdf2.png);
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
            right: 10px;
            top: 600px;
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

<br><br>
<br>
<br>
<br>
    @foreach ($trabajadors as $trab)
        @if ($trab->idusuario == Auth::user()->id)
            @foreach ($regpedidomaterials as $pedcom)
                @if ($pedcom->idtrabajador == $trab->id)
                
                    <h4 style="text-align:center;width:100%; height=1">REPORTE DE MATERIALES USADOS EN CONSTRUCCION -
                        <strong> {{ $pedcom->detalle }}</strong>
                    </h4>
                    <h4 style="text-align:center;width:100%; height=1">ENCARGADO DEL ALMACEN - <strong>
                            {{ Auth::user()->name }}</strong></h4>
                      

                @endif
            @endforeach
        @endif
    @endforeach
    <h3 style="text-align:center;width:100%; height=1">MATERIALES USADOS EN CONSTRUCCION</strong></h3>
    <table width="100%">
       
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

            <td style="text-align:left;width:100%;" colspan="4">
                <h5>FECHA Y HORA</h5>
            </td>
        </tr>

        @foreach ($gastomaterials as $gasto)

                @if ($gasto->idregpedido == Auth::user()->id)
                <tr>
                    @foreach ($materials as $material)
                        @if ($material->id == $gastomaterial->idmaterial)
                            <td style="text-align:left;width:100%; " colspan="4">
                                <hr style="width: 100%;height: 0px;">
                                <font size=3>{{ $material->descripcion }}</font>
                            </td>
                            <td style="text-align:center;width:100%; " colspan="4">
                                <hr style="width: 100%;height: 0px;">
                                <font size=3>{{ $material->unidad }}</font>
                            </td>
                        @endif
                    @endforeach
                    <td style="text-align:left;width:100%; " colspan="4">
                        <hr style="width: 100%;height: 0px;">
                        <font size=3>{{ $gasto->cantidad }}</font>
                    </td>
                    <td style="text-align:left;width:100%; " colspan="4">
                        <hr style="width: 100%;height: 0px;">
                        <font size=3>{{ $gasto->created_at }}</font>
                    </td>
                </tr>
                @endif


           
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
