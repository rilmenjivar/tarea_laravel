<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyectos - @yield('titulo')</title>
    </head>
    <body class="antialiased">
        <nav>
        <a href="/">Home (CRUD) </a>
        </nav>
        <h1>@yield('titulo')</h1>        
        <hr>
        <h3>Actualizar</h3>
        <form method="get" action="{{ route('proyectos.formactualizardata',['id'=>$id]) }}">
        <table>
        <td><label><strong>Nombre Proyecto</strong></label></td>
        <td><input type="text" name="NombreProyecto" value="{{ $NombreProyecto }}" size="25px" required></td>
        <tr>
        <td><label><strong>Fuente Fondos</strong></label></td>
        <td><input type="area" name="fuenteFondos" value="{{ $fuenteFondos }}" size="25px" required></td>
        <tr>
        <td><label><strong>Monto Planificado</strong></label></td>
        <td><input type="text" name="MontoPlanificado" value="{{ $MontoPlanificado }}" size="15px" required></td>
        <tr>
        <td><label><strong>Monto Planificado</strong></label></td>
        <td><input type="text" name="MontoPatrocinado" value="{{ $MontoPatrocinado }}" size="15px" required></td>
        <tr>
        <td><label><strong>Monto Fondos Propios</strong></label></td>
        <td><input type="text" name="MontoFondosPropios" value="{{ $MontoFondosPropios }}" size="15px" required></td>
        <tr>
        </table>
        <input type="submit">
       </form>
    </body>
</html>