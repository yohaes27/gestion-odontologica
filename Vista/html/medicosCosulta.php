<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         
        <link rel="stylesheet" href="Vista/CSS/estilos.css"> 
        
        <script type="text/javascript" src="Vista/jquery/jquery-3.2.1.min.js"></script>

        <script src="Vista/js/script.js" type="text/javascript"></script>
   
        <script src="Vista/js/medico.js" type="text/javascript"></script>
   
    </head>
    <body>
        <?php
            if($result->num_rows > 0){
        ?>
        <table>
            <tr>
                <th>Documento</th>
                <th>Nombre Completo</th>
                
            </tr>
            <?php 
                while($fila=$result->fetch_object()){
            ?>
            <tr>
                    <td><?php echo $fila->MedIdentificacion ?></td>
                    <td><?php echo $fila->MedNombres." ". $fila->MedApellidos
                              ?></td>
                  
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
            }
            else {
        ?>
                <p>Este medico no se encuentra registrado.</p>

                <input type="button" name="ingPaciente" id="ingPaciente" value="Ingresar Medico" onclick="mostrarFormularioMedico()">
        <?php
            }
 ?>
 </body>
</html>
