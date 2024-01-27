<?php
session_start();  // Iniciar sesión

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login.php");
    exit();
}

// Resto del código para la página de inicio después del inicio de sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
</head>
<body>

<h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Cerrar Sesión</a>

</body>
</html>
