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
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Conferencia</th>
                    <th>División</th>
                    <th>Opciones</th>
                </tr>
            <?php
                include "lib/nba.php";
                $bbdd = new Nba();

                $listaEquipos = $bbdd->listaEquipos();

                if ($listaEquipos != null) {
                    foreach ($listaEquipos as $lista) {
                        echo "<tr>";
                        echo "<td>" . $lista ['Nombre'] . "</td>";
                        echo "<td>" . $lista ['Ciudad'] . "</td>";
                        echo "<td>" . $lista ['Conferencia'] . "</td>";
                        echo "<td>" . $lista ['Division'] . "</td>";
                        echo "<td><a href='borrarDB.php?nombre=" . $lista ['Nombre'] . "'>BORRAR</a></td>";
                        echo "</tr>";
                    }
                }
            ?>

            </table>
        </section>
    </main>
</body>