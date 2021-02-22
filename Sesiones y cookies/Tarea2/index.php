<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Tarea 2 SESIONES</title>
</head>

<body>
    <div class="main-wrapper">
        <h1>2º DAW - SESIONES Y COOKIES - TAREA 2</h1>
        <div class="formulario">
            <form action="mostrar.php" method="post">
                <fieldset>
                    <legend>SESIONES DE USUARIO</legend>
                    <label for="nombre">Introduce un nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                    <input class="btn-send" type="submit" value="Enviar">
                    <input class="btn-close" name="destroy" type="submit" value="Cerrar sesión">
                </fieldset>
            </form>
        </div>
        <div class="results">
            <?php
            if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
                echo "Usuario loggeado como:<b> " .  $_SESSION['nombre'] . "</b>";
                echo "<br>";
                // echo "Recarga la página para destruir la sesión.";
                // session_destroy();
            } else {
                echo "Introduce un nombre para iniciar sesión :)<br>";
            }

            if (isset($_POST['destroy'])) {
                echo "Sesión cerrada.";
                $_SESSION = [];
                session_destroy();
            }
            ?>
        </div>
    </div>
    <footer>&copy; ALEJANDRO MÁRQUEZ ARAGONÉS</footer>
</body>

</html>