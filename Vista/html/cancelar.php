<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestion Odontologica</title>
    <link rel="stylesheet" href="vista/CSS/estilos.css">
    
    <script type="text/javascript" src="Vista/html/jquery/jquery-3.2.1-min.js"></script>

    <!-- <script type="text/javascript" src="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>      -->
    
    <script type="text/javascript" src="Vista/js/script.js" ></script>

    
<!-- estoy perdido -->

</head>
<body>

    <div id="contenedor">
        <div id="encabezdo">
            <h1>Sistema de Gestion Odontologica</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a></li>
            <li><a href="index.php?accion=asignar">Asignar</a></li>
            <li><a href="index.php?accion=consultar">Consultar</a></li>
            <li class="activa"><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
        </ul>
        <div id="contenido">
            <h2>Cancelar Cita</h2>
            <form action="index.php?accion=cancelarCita" method="post" id="frmcancelar">
                <table>
                    <tr>
                        <td>Documento del Paciente </td>
                        <td><input type="text" name="cancelarDocumento" id="cancelarDocumento"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="button" value="Consultar"onclick="cancelarConsultar()"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><div id="paciente3"></div></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>