<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> TAREA LARAVEL</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
     <a href="/">HOME</a>
     <br><hr>
    <form action ="{{ route('proyectos.formdataguardar') }}" method="GET">
        <table>
            <tr>
                <td>Nombre Proyecto </td>
                <td> <input type="text" name="NombreProyecto" /> </td>
            </tr>
            <tr>
                <td>Fuente Fondos</td>
                <td> <input type="text" name="fuenteFondos" /></td>
            </tr>
            <tr>
                <td>Monto Planificado</td>
                <td><input type="text" name="MontoPlanificado" /></td>
            </tr>
            <tr>
                <td>Monto Patrocinado</td>
                <td><input type="text" name="MontoPatrocinado" /></td>
            </tr>
            <tr>
                <td>Monto Fondos Propios</td>
                <td><input type="text" name="MontoFondosPropios" /></td>
            </tr>
      
           <tr><input type="submit" /></tr>
        </table>

    </form>

    </body>
</html>