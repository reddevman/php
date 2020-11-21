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
            <a href="index.php"><img src="css/NBA-logo.png" alt="logo nba"></a>
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <?php
            include "lib/jugador.php";

            $nombre = $_REQUEST['nombre'];

            $bbdd = new Jugador();

            if ($bbdd->borrarJugador($nombre)) {
                echo "<h3>Registro borrado.</h3>";
                echo "<a class='enlaces' href='listajugadores.php'>LISTADO DE JUGADORES</a>";                
            } else {
                echo "<h3>Error en el borrado del registro.</h3>";
            }
            ?>

        </section>
    </main>
</body>