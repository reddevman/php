<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Inicio de la sesión
    session_start();
    // Comprobación si existe ya esa sesión con ese nombre
    if (!isset($_SESSION['numVisitas'])) {
        // Se le da un valor si no existe
        $_SESSION['numVisitas'] = 0;
        print_r($_SESSION);
    } else {
        // Se incrementa en 1 si ya existe
        $_SESSION['numVisitas']++;
        print_r($_SESSION);
    }
    ?>
</body>

</html>