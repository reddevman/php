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
    # Inicio de sesión para recoger las variables que hemos almacenado para su uso en otros ficheros
    //session_start();
    
    $bbdd = new Jugador();
    $posicion = $bbdd->listaPosiciones();
    $equipo = $bbdd->listaNombreEquipos();
    ?>

    <main>
        <header>
            <a href="index.php"><img src="css/NBA-logo.png" alt="logo nba"></a>
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <form action="actualizarDB.php" method="post">
                <fieldset>
                    <legend>Actualizar un equipo</legend>
                    <label for="nombre">Nombre</label><br>
                    
                    <!-- Se inserta una pequeña línea de PHP para recoger la variable registrada en otras webs -->
                    <input type="text" name="nombre" value="<?=$_REQUEST['nombre']; ?>" readonly><br><br>
                    <label for="procedencia">Procedencia</label><br>
                    <input type="text" name="procedencia"><br><br>
                    <label for="altura">Altura</label><br>
                    <input type="text" name="altura"><br>
                    <label for="peso">Peso</label><br>
                    <input type="text" name="peso"><br>
                    <?php
                    echo "<label for=\"pos\">Posición</label><br>";
                    echo "<select name= \"posicion\">";
                    if ($posicion != null) {
                        foreach ($posicion as $posic) {
                            $nombre = $posic['Posicion'];
                            echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                        }
                        echo "</select><br><br>";
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
                    <input type="submit" value="ACTUALIZAR">
                </fieldset>
            </form>

        </section>
    </main>
</body>

</html>