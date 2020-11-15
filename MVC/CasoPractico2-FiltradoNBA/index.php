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
    include 'lib/nba.php';
    $bbdd = new Nba();
    $local = $bbdd->listaEquipos();
    $visitante = $bbdd->listaEquipos();
    $temporada = $bbdd->listaTemporadas();
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>Filtrado NBA</h1>
        </header>
        <section>
            <form action="filtrado.php" method="post">
                <h4>Equipo local</h4>

                <?php
                echo "<select name= \"elocales\">";
                if ($local != null) {
                    foreach ($local as $equipo) {
                        $nombre = $equipo['Nombre'];
                        echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                    }
                    echo "</select>";
                }
                ?>
                <h4>Equipo visitante</h4>
                <?php
                echo "<select name= \"evisitantes\">";
                if ($visitante != null) {
                    foreach ($visitante as $equipo) {
                        $nombre = $equipo['Nombre'];
                        echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                    }
                    echo "</select>";
                }
                ?>
                <h4>Temporada</h4>
                <?php
                echo "<select name=\"temps\">";
                if ($temporada != null) {
                    foreach ($temporada as $temp) {
                        $nombre = $temp['temporada'];
                        echo "<option value=\".$nombre.\">" . $nombre . "</option>";
                    }
                }
                echo "</select>";
                ?>
                
                <br><br>
                <input type="submit" value="FILTRAR">
            </form>
        </section>
    </main>
</body>

</html>