<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestion Odontologica</title>

    <!-- no cabiarlo de orden dejarlo haci -->
    <!-- estilo -->
    <link rel="stylesheet" href="Vista/CSS/estilos.css">

    <!-- no cabiarlo de orden dejarlo haci -->
    <!-- jquery -->
    <link href="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet" type="text/css"/>
    
    <!-- no cabiarlo de orden dejarlo haci -->
    <script type="text/javascript" src="Vista/jquery/jquery.js"></script>
    
    <!-- no cabiarlo de orden dejarlo haci -->
    <script type="text/javascript" src="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

    <!-- no cabiarlo de orden dejarlo haci -->
    <script type="text/javascript" src="Vista/jquery/jquery-3.2.1.min.js"></script>
    
    <!-- no cabiarlo de orden dejarlo haci -->
    <!-- js personal  -->
    <script type="text/javascript" src="Vista/js/script.js"></script>       
 
</head>
<body>

    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestion Odontologica</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a></li>
            <li class="activa" ><a href="index.php?accion=asignar">Asignar</a></li>
            <li><a href="index.php?accion=consultar">Consultar cita</a></li>
            <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            <li><a href="index.php?accion=medico">Medicos</a></li>
        </ul>
        <div id="contenido">
            <h2>Asignar cita</h2>
            <p>Cotenido de  la pagina</p>

            <form id="frmPacienter" action="index.php?accion=guardarCita" method="post">
                <table>
                     <tr>
                        <td>Documento del paciente</td>
                        <td>
                            <input type="text" name="asignarDocumento" id="asignarDocumento">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button" value="Consultar" 
                        name="asignarConsultar" id="asignarConsultar" onclick="consultarPaciente()"></td>
                        </tr>
                    <tr>
                        <td colspan="2">
                            <div id="paciente"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Médico</td>
                            <td>
                                <select id="medico" name="medico" onchange="cargarHoras()">
                                <option value="-1" selected="selected">---Selecione el Médico</option>
                                <?php
                                    while( $fila = $result->fetch_object())
                                    {
                                ?>
                                <option value = <?php echo $fila->MedIdentificacion; ?> >
                                <?php echo $fila->MedIdentificacion . " " . $fila->MedNombres ." ". $fila->MedApellidos; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>


                    <tr>
                        <td>Fecha</td>
                        <td>
                            <input type="date" id="fecha" name="fecha">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Consultorio</td>

                        <td>
                            <select id="consultorio" name="consultorio" onchange="cargarHoras()">
                                <option value="-1" selected="selected">---Selecione el Consultorio</option>
                                    <?php
                                        while( $fila = $result2->fetch_object())
                                            {
                                    ?>
                                <option value = <?php echo $fila->ConNumero; ?> >
                                <?php echo $fila->ConNumero . " - " . $fila->ConNombre ; 
                                ?>
                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Hora</td>
                        <td>

                            <select id="hora" name="hora" onmousedown="seleccionarHora()">
                                <option value="-1" selected="selected">---Seleccione la hora ---</option>
                            </select>

                        </td>
                    </tr>

                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="asignarEnviar" value="Enviar" id="asignarEnviar">
                        </td>
                    </tr>
            </table>

            </form>


            <div id="frmPaciente" title="Agregar Nuevo Paciente">
                <form id="agregarPaciente">
                    <table>
                        <tr>
                            <td>Documento</td>
                                <td><input type="text" name="PacDocumento"  id="PacDocumento"></td>
                        </tr>
                        <tr>
                           
                            <td>Nombres</td>
                            <td><input type="text" name="PacNombres" id="PacNombres"></td>
                        </tr>
                        <tr>
                            <td>Apellidos</td>
                            <td><input type="text" name="PacApellidos" id="PacApellidos"></td>
                        </tr>
                        <tr>
                            <td>Fecha de Nacimiento</td>
                            <td><input type="date" name="PacNacimiento" id="PacNacimiento"></td>
                        </tr>
                        <tr>
                            <td>Sexo</td>
                            <td>
                            <select id="pacSexo" name="PacSexo">
                                <option value="-1" selected="selected">--Selecione el sexo ---</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                            </td>
                        </tr>

                    </table>
                    
                   
                </form>
            </div>


        </div>
    </div>

</body>
</html>