<?php
include 'conexion.php'; // Archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Encriptar la contraseña
    $nivel_cuenta = $_POST['nivel_cuenta'];
    $skin_favorita = $_POST['skin_favorita'];

    // Validación de campos
    if (empty($nombre_usuario) || empty($email) || empty($contrasena) || empty($nivel_cuenta)) {
        die("Por favor, completa todos los campos obligatorios.");
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO cuentas (nombre_usuario, email, telefono, contrasena, nivel_cuenta, skin_favorita) 
            VALUES ('$nombre_usuario', '$email', '$telefono', '$contrasena', '$nivel_cuenta', '$skin_favorita')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. Bienvenido a Free Fire!";
        echo "<br><a href='registro.php'>Volver al registro</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
