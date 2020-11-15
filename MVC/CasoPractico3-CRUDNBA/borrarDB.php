<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD NBA</title>
</head>

<body>
    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <?php
            include "lib/nba.php";
            # Inicio de sesión para recoger las variables que hemos almacenado para su uso en otros ficheros
            session_start();

            $bbdd = new Nba();

            if ($bbdd->borrarEquipo($_SESSION['nombre'], $_SESSION['ciudad'], $_SESSION['conferencia'], $_SESSION['division'])) {
                echo "<h3>Registro borrado.</h3>";
            } else {
                echo "<h3>Error en el borrado del registro.</h3>";
            }
            ?>

        </section>
    </main>
</body>