<?php
$servername = "bkw8famsom7zesvkgtsi-mysql.services.clever-cloud.com";
$username = "urnhwdaqw5p28lz5";
$password = "tXR0CaFniLc4UhKJMmZO";
$database = "bkw8famsom7zesvkgtsi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
