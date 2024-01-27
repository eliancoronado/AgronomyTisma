<?php
session_start();  // Iniciar sesión

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirige a la página de inicio de sesión
header("Location: ../../login.php");
exit();
?>
