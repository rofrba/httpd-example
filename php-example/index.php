<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación PHP en Contenedor</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); display: inline-block; }
        h1 { color: #5a5a5a; }
        p { color: #888; }
        .info { margin-top: 30px; border-top: 1px solid #ddd; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Hola desde PHP en un contenedor!</h1>
        <p>Esta página fue servida por un servidor web Apache dentro de Docker.</p>
        <div class="info">
            <p><strong>Versión de PHP:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Fecha y Hora actual:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>