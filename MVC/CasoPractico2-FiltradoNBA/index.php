<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Filtrado NBA</title>
</head>

<body>

<!-- PASOS CREACIÓN DE INDEX.PHP

- Creación de instancias del objeto principal que contiene las consultas
- Creación de variables asignándoles de valor las llamadas a los métodos que contienen las consultas
- Estructura html con form y option
- Introducir en cada <select> un foreach que recorra el array obtenido de la consulta a la que pertenezca

--->

    <?php
    include 'lib/nba.php';
    $bbdd = new Nba();
    $local = $bbdd->listaEquiposLocales();
    $visitante = $bbdd->listaEquiposVisitantes();
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
                        $nombre = $equipo['equipo_local'];
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
                        $nombre = $equipo['equipo_visitante'];
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