
<?php
session_start();

$error ='';

$conn = new mysqli('localhost', 'root', '', 'base2');
if ($conn->connect_error){
    die ("error de conexion:".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['mail'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conn->prepare("SELECT id, nombre, contrasena from usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $row = $result->fetch_assoc()) {
        if (password_verify($contrasena, $row['contrasena'])) {
 // Contraseña vál

            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
// Redirigir a la página de tareas
            header("Location: inicio.php");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } 
    else {
        echo "Usuario no encontrado.";
    }
    $stmt->close();
}  
$conn->close(); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>



            <form action="login.php" method="post">
            
                <h1>login</h1>
                    
                
                <input type="number" name="mail">
                <br>

                contraseña
                <input type="password" name ="contrasena">
                <br>

                <input type="submit" value="Realizar">

            </form>

            

            <?php if ($error): ?>
                    <p style="color:red;"><?=htmlspecialchars($error)?></p>
                <?php endif; ?>



</body>
</html>