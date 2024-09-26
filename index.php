
<?php
echo "hello word";

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #45a049;
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #555;
            font-size: 14px;
        }

        .forgot-password a {
            color: #4CAF50;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="#" method="post">
            <input type="text" class="input-field" placeholder="Usuario" required>
            <input type="password" class="input-field" placeholder="Contraseña" required>
            <button type="submit" class="login-btn">Ingresar</button>
        </form>
        <span class="forgot-password">
            ¿Olvidaste tu contraseña? <a href="#">Recuperar</a>
        </span>
    </div>
</body>
</html>

?>