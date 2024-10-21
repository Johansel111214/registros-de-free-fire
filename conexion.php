<?php
$servername = "localhost";
$username = "root";  // Asegúrate de cambiar los datos según tu configuración de XAMPP
$password = "";
$dbname = "freefire_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
