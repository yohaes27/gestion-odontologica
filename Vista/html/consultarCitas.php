<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($result->num_rows > 0){
            
    ?>
    <table>
        <tr>
            <th>Número</th><th>Fecha</th><th>Hora</th>
        </tr>
        <?php 
            while($fila=$result->fetch_object()){
        ?>
        <tr>
            <td>
                <?php echo $fila->CitNumero;?>
            </td>
            <td>
                <?php echo $fila->CitFecha;?>
            </td>
            <td>
                <?php echo $fila->CitHora;?></td>
           
          
            <td><a href="index.php?accion=verCita&numero=<?php echo $fila->CitNumero; 
            ?>">Ver</a></td>
        </tr>
        <?php
            }
        ?>consultarDocumento
    </table>
    <?php
        }
        else {
    ?>
    <p>El paciente no tiene citas asignadas</p>
    <?php
        }
    ?>



</body>
</html>