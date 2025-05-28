<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
           
                if($result->num_rows > 0){
            ?>
            
                <table border="2">
                    <br>
                    <tr>
                        <th>id</th>
                        <th>Nombre completo de medico</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                        <?php
                        while ($fila=$result->fetch_object()){
                    ?>
                    <tr>
                        <td>
                            <?php echo $fila->MedIdentificacion ?>
                        </td>
                        <td>
                            <?php echo $fila->MedNombres." ". $fila->MedApellidos
                              ?>
                        </td>
                        <td>
                            <a href="#" onclick="editarMedico(<?php  echo $fila->MedIdentificacion?>)" >editar</a> 
                        </td>
                        <td>
                            <a href="#" onclick="eliminarMedico(<?php  echo $fila->MedIdentificacion?>)" >eliminar</a>
                        </td>
                    </tr>
                    <?php }  ?>
            </table>
            <?php
                }
                else {
                        
            ?>
            <p>No hay medicos</p>
            <?php
                }
            ?>

</body>
</html>