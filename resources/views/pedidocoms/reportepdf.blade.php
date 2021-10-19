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
                <P>
                <h1>Constructora PEÑA-ANDRADE</h1>
                <h2>Reporte Pedido de MATERIALES</h2>
                </P>
            </td>
            
        </tr>
    </table>

    <main><hr style="width: 100%;height: 2px;">
        <h3 style="text-align:center;width:100%; height=1">DATOS DEL TRABAJADOR Y EL MATERIAL</h3>
   
       <hr style="width: 100%;height: 2px;">
        <div class='container'>
            <table width="100%">
                
              hola hola hola
            </table>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
