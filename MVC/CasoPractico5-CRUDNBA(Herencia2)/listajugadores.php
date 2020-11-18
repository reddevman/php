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
                    <th>Procedencia</th>
                    <th>Altura</th>
                    <th>Peso</th>
                    <th>Posicion</th>
                    <th>Nombre_equipo</th>
                    <th>Opciones</th>
                </tr>
            <?php
                include "lib/jugador.php";
                $bbdd = new Jugador();

                $listaEquipos = $bbdd->listaJugadores();

                if ($listaEquipos != null) {
                    foreach ($listaEquipos as $lista) {
                        echo "<tr>";
                        echo "<td>" . $lista ['Nombre'] . "</td>";
                        echo "<td>" . $lista ['Procedencia'] . "</td>";
                        echo "<td>" . $lista ['Altura'] . "</td>";
                        echo "<td>" . $lista ['Peso'] . "</td>";
                        echo "<td>" . $lista ['Posicion'] . "</td>";
                        echo "<td>" . $lista ['Nombre_equipo'] . "</td>";
                        echo "<td><a class='enlaces linkborrar' href='borrarDB.php?nombre=" . $lista ['Nombre'] . "'>BORRAR</a></td>";
                        echo "</tr>";
                    }
                }
            ?>

            </table>
        </section>
    </main>
</body>