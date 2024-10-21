<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Free Fire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #FF4500;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #FF6347;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Registra tu Cuenta Free Fire</h2>
    <form action="procesar_registro.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Nombre de Usuario" required>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <input type="text" name="telefono" placeholder="Número de Teléfono (opcional)">
        <input type="text" name="nivel_cuenta" placeholder="Nivel de la Cuenta en Free Fire" required>
        <input type="text" name="skin_favorita" placeholder="Skin Favorita">
        <input type="submit" value="Registrar">
    </form>
</div>

</body>
</html>
