<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD NBA</title>
</head>

<body>

    <?php
    include "lib/jugador.php";
    $bbdd = new Jugador();
    $posicion = $bbdd->listaPosiciones();
    $equipo = $bbdd->listaNombreEquipos();
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>CRUD NBA</h1>
        </header>
        <section>
            <h3>Formulario insertar</h3>
            <form action="insertarDB.php" method="post">
                <fieldset>
                    <legend>Añadir un jugador</legend>
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre"><br>
                    <label for="procedencia">Procedencia</label><br>
                    <input type="text" name="procedencia"><br>

                    <?php
                    echo "<label for=\"pos\">Posición</label><br>";
                    echo "<select name= \"posicion\">";
                    if ($posicion != null) {
                        foreach ($posicion as $posic) {
                            $nombre = $posic['Posicion'];
                            echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                        }
                        echo "</select><br>";
                    }
                    echo "<label for=\"equip\">Equipos</label><br>";
                    echo "<select name= \"equipo\">";
                    if ($equipo != null) {
                        foreach ($equipo as $equip) {
                            $nombre = $equip['Nombre_equipo'];
                            echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                        }
                        echo "</select>";
                    }
                    ?>

                    <br><br>
                    <input type="submit" value="INSERTAR"><br><br>
                    <a class="enlaces" href="listajugadores.php">LISTADO DE JUGADORES</a>

                </fieldset>

            </form>
        </section>
    </main>
</body>

</html>