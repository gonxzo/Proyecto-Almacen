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
            padding: 40px;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0.7cm;
            background-color: #617c62;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0.7cm;
            background-color: #617c62;
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
    <header>

    </header>

    <main>
        <table width="100%">
            <tr>
                <td colspan="5" style="text-align:center;width:100%;;">
                    <img src="img/logoE.png" alt="" width="170  " height="150">
                </td>
                <br>
                <td style="text-align:center;width:100%; size=1" colspan="7">
                    <P>
                    <h2>CONSULTORA & CONSTRUCTORA PEÑA-ANDRADE </h2>
                    </P>
                </td>
            </tr>
        </table>
        <strong>---------------------------------------------------------------------------------------------------------------------------------------
        </strong>
        <h3 style="text-align:center;width:100%; height=1">REPORTE DEL SEGUIMIENTO DE LAS OBRAS A CARGO DEL SUPERVISOR
        </h3>

        @foreach ($worker as $trab)
            @if ($trab->idproject == $project->id)
                @foreach ($user as $users)
                    @if ($users->id == $trab->iduser)
                        <strong>NOMBRE DEL SUPERVISOR DE OBRA: </strong> {{ $users->name }}<br>
                    @endif
                @endforeach
            @endif
        @endforeach
        <strong>NOMBRE DEL PROYECTO: </strong> {{ $project->name }}<br>
        <strong>TIPO DE PROYECTO: </strong> {{ $project->typeproject }}<br>
        <strong>--------------------------------------------------------------------------------------------------------------------------------------- </strong>
        <strong>FECHA DE INICIA: </strong> {{ $project->dateb."      "}}<strong>FECHA FIN: </strong>{{ $project->datef."      "}}<strong>FECHA DE ENTREGA: </strong> {{ $project->dateentry }} <br>
        <strong>--------------------------------------------------------------------------------------------------------------------------------------- </strong>
        <strong>SUPERFICIE UTIL: </strong> {{ $project->surface }}<br>
        <strong>--------------------------------------------------------------------------------------------------------------------------------------- </strong>
        <strong>DESCRIPCION: </strong> {{ $project->description }}
        <strong>--------------------------------------------------------------------------------------------------------------------------------------- </strong>

        @foreach ($historial as $hist)
            @if ($project->id == $hist->idproject)
                <strong>FECHA Y HORA DE LA REVISION: </strong> {{ $hist->created_at }} <br>
                <strong>OBSERVACIONES: </strong> {{ $hist->descripcion }} <br>
                <strong>--------------------------------------------------------------------------------------------------------------------------------------- </strong>
                </strong>
                @foreach ($document as $doc)
                    @if ($doc->idproject == $project->id && $doc->created_at == $hist->created_at)
                        <div class='container'>
                            <table width="100%">
                                <tr>
                                    <td style="text-align:center;width:100%;" colspan="7">
                                        <br>
                                        <img class="image" src="./uploads/{{ $doc->document }}" width="500"
                                            height="260" alt=" Fecha: {{ $doc->created_at }} "
                                            title="Fecha: {{ $doc->created_at }} ">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
    </main>
    <footer>
    </footer>
</body>

</html>
