<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Nombres SESIONES PHP</title>
</head>

<body>
    <?php

    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {

        $_SESSION['listaNombres'][] = $_POST['nombre'];
    

        var_dump($_SESSION['listaNombres']);
    } else {
        echo "No se ha introducido ningún nombre.";
    }
    ?>
    <br>
    <a href="index.php"><i class="fas fa-arrow-left"></i>ATRÁS</a>
    <footer>&copy; ALEJANDRO MÁRQUEZ ARAGONÉS</footer>
</body>

</html>