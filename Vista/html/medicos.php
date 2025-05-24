<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicos</title>

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
            <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            <li><a href="index.php?accion=medico">Medicos</a></li>
        </ul>
        <div id="contenido">
            <h2>Medicos </h2>
            <p>contenido</p>

            <form>
                <table>
                    <tr>
                        <td>Documento del Medico</td>
                        <td>
                            <input type="number" name="consulMedico" id="consulMedico">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button" value="consultar" name="botonConsultar" id="botonConsultar" onclick="consultarMedico()">
                        </td>
                    </tr>
                    <tr>
                        <td colsppan ="2">
                            <div id="mostrarMedico"></div>
                        </td>
                    </tr>
                </table>
            </form>

            <form action="index.php?accion=listarMedicos"  method="post" id="frmconsultar">
                <table>
                    
                    <tr>
                    <td colspan="2">
                        <input type="button" name="listamedico"value="Listar" id="listamedico" onclick="listarMedicos()">
                    </td>
                    </tr>
                    <tr>                        
                        <td colspan="2">
                            <div id="medico"></div>
                        </td>
                    </tr>
                </table>
            </form>

<!-- agrega paciente -->
            <div id="frmPaciente" title="Agregar Nuevo Medico">
                <form id="agregarPaciente">
                    <table>
                        <tr>
                            <td>Documento</td>
                                <td><input type="text" name="MedDocumento"  id="MedDocumento"></td>
                        </tr>
                        <tr>
                            <td>Nombres</td>
                            <td><input type="text" name="MedNombres" id="MedNombres"></td>
                        </tr>
                        <tr>
                            <td>Apellidos</td>
                            <td><input type="text" name="MedApellidos" id="MedApellidos"></td>
                        </tr>
                    </table> 
                </form>
            </div>

           
        </div>
    </div>
</body>
</html>