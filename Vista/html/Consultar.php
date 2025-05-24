<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar  Cita</title>

    <link rel="stylesheet" href="vista/CSS/estilos.css">
    
    <script type="text/javascript" src="Vista/js/script.js" ></script>
    
    <script type="text/javascript" src="Vista/jquery/jquery.js"></script>
    
    <script src="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
 
   
</head>
<body>

    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestion Odontologica</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a></li>
            <li><a href="index.php?accion=asignar">Asignar</a></li>
            <li><a href="index.php?accion=consultar">Consultar</a></li>
            <li class="activa"><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            <li><a href="index.php?accion=medico">Medicos</a></li>
        </ul>
        
        
        <div id="contenido">
            <h2>Consultar Cita</h2>

            <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">
                <table>
                    <tr>
                        <td>Documento del Paciente</td>
                        <td><input type="text" name="consultarDocumento"  id="consultarDocumento"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="button" name="consultarConsultar"value="Consultar" id="consultarConsultar" onclick="consultarCita()"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="paciente2"></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        
    </div>
</body>
</html>