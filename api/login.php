<?php
header("Content-Type: application/json");

$usuarios =[
    ["username" => "admin", "password" => "admin"],
    ["username" => "adrian", "password" => "Adrian12@"],
    ["username" => "usuario", "password" => "usuario"]
];
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido. Usa POST."]);
    exit;
}
    // Aquí deberías validar las credenciales contra una base de datos
    foreach ($usuarios as $usuario) {
        if ($usuario['username'] === $username && $usuario['password'] === $password) {
            $_SESSION['user'] = $username;
            echo json_encode(["message" => "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($username) . "!"]);
            exit;
        }
        exit;
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login API</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class ="formulario">
            <h2>Inicio de Sesión</h2>
            <form action ="login.php" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </body>
    </html>
