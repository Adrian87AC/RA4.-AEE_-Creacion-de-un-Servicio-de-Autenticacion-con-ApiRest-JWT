<?php
 session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Aquí deberías validar las credenciales contra una base de datos
        if ($username === 'admin' && $password === 'password') {
            $_SESSION['user'] = $username;
            echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($username) . "!";
        } else {
            echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
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
