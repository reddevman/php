<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Filtrado NBA</title>
</head>

<body>

    <?php
    include "lib/nba.php";
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
            <h3>Formulario insertar</h3>
            <form action="insertarDB.php" method="post">
                <fieldset>
                    <legend>Añadir un equipo</legend>
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre"><br>
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

                    <br><br><br><br>
                    <input type="submit" value="INSERTAR">
                </fieldset>

            </form>
        </section>
    </main>
</body>

</html>