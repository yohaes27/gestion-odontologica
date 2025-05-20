<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="Vista/CSS/estilos.css">

    <script type="text/javascript" src="Vista/js/script.js" ></script>

    <script type="text/javascript" src="Vista/html/jquery/jquery-3.2.1-min.js"></script>
    </head>
    <body>
        <?php
            if($result->num_rows > 0){
        ?>
        <table>
            <tr>
                <th>Documento</th>
                <th>Nombre Completo</th>
                <th>Sexo</th>
            </tr>
            <?php 
                while($fila=$result->fetch_object()){
            ?>
            <tr>
                    <td><?php echo $fila->PacIdentificacion;?></td>
                    <td><?php echo $fila->PacNombres . " ". $fila->PacApellidos;?></td>
                    <td><?php echo $fila->PacSexo;?></td>
                    <td>Ver</td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
            }
            else {
        ?>
                <p>El paciente no existe en la base de datos.</p>
                <input type="button" name="ingPaciente" id="ingPaciente" value="Ingresar Paciente" onclick="mostrarFormulario()">
        <?php
            }
 ?>
 </body>
</html>
