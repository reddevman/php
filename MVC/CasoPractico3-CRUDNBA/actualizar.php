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
    include "lib/nba.php";
    # Inicio de sesión para recoger las variables que hemos almacenado para su uso en otros ficheros
    session_start();
    
    $bbdd = new Nba();
    $conferencia = $bbdd->listaConferencias();
    $division = $bbdd->listaDivisiones();
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <form action="actualizarDB.php" method="post">
                <fieldset>
                    <legend>Actualizar un equipo</legend>
                    <label for="nombre">Nombre</label><br>
                    
                    <!-- Se inserta una pequeña línea de PHP para recoger la variable registrada en otras webs -->
                    <input type="text" name="nombre" value="<?php echo $_SESSION['nombre']; ?>" readonly><br><br>
                    <label for="ciudad">Ciudad</label><br>
                    <input type="text" name="ciudad"><br><br>
                    <?php
                    echo "<label for=\"confe\">Conferencias</label><br>";
                    echo "<select name= \"conferencia\">";
                    if ($conferencia != null) {
                        foreach ($conferencia as $confe) {
                            $nombre = $confe['Conferencia'];
                            echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                        }
                        echo "</select><br><br>";
                    }
                    echo "<label for=\"divi\">Divisiones</label><br>";
                    echo "<select name= \"division\">";
                    if ($division != null) {
                        foreach ($division as $divis) {
                            $nombre = $divis['Division'];
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