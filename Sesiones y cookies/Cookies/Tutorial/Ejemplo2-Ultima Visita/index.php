<?php
    // Guardar fecha actual en una variable
                // dia/mes/año | hora:minutos:segundos
    $fecha = date('d/m/Y | H:i:s');

    // Creación de la cookie con el valor de la fecha
    setcookie('fecha', $fecha, time()+31536000);

    if (isset($_COOKIE['fecha'])) {
        echo "La última visita fue el " . $_COOKIE['fecha'];
    } else {
        echo "Esta es tu primera visita a la página.";
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Última visita</title>
</head>
<body>
    
</body>
</html>