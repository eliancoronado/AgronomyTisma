<?php
session_start();  // Iniciar sesión

if (isset($_POST['submit'])) {
    include '../../config/config.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    // Consulta SQL para obtener el usuario
    $sql = "SELECT id, username, password FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result === false) {
        // Manejar errores de consulta SQL
        echo "Error en la consulta: " . $conn->error;
    } else {
        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: ../View/home.php");  // Redirige a la página de inicio
        } else {
            echo "Usuario no encontrado";
        }
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
