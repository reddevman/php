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
            include "lib/equipo.php";

            $nombre = $_GET['nombre'];

            $bbdd = new Equipo();

            if ($bbdd->borrarEquipo($nombre)) {
                echo "<h3>Registro borrado.</h3>";
                echo "<a href='listaequipos.php'>LISTADO DE EQUIPOS</a>";                
            } else {
                echo "<h3>Error en el borrado del registro.</h3>";
            }
            ?>

        </section>
    </main>
</body>