<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo - PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #333;
            margin-bottom: 1rem;
        }
        .info {
            color: #666;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
        .php-version {
            background: #f8f9fa;
            padding: 0.5rem;
            border-radius: 5px;
            margin-top: 1rem;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            echo "<h1>¡Hola Mundo desde PHP!</h1>";
            echo "<p>Esta página está funcionando correctamente con PHP.</p>";
            echo "<div class='info'>Servidor: " . $_SERVER['SERVER_NAME'] . "</div>";
            echo "<div class='info'>Fecha y hora: " . date('Y-m-d H:i:s') . "</div>";
            echo "<div class='php-version'>Versión de PHP: " . phpversion() . "</div>";
        ?>
    </div>
</body>
</html>