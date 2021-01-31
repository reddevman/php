<?php
// CREAR Y BORRAR COOKIES ANTES DE TODO EL HTML

// Borrar cookie, el valor será la cookie en sí misma
// Borrar cookie, valor de tiempo en negativo
// Comprobación creada para que no de mensaje de que no existe la variable $_COOKIE
if (isset($_COOKIE['nombre']) && !empty($_COOKIE['nombre'])) {
setcookie('nombre', $_COOKIE['nombre'], time() - 15000);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Recibidas</title>
</head>

<body>

    <?php

    if (isset($_COOKIE['nombre'])) {
        echo "La cookie tiene el valor de " . $_COOKIE['nombre'];
    } else {
        echo "Cookie BORRADA";
    }
    ?>
    <a href="index.php">INICIO</a>
</body>

</html>