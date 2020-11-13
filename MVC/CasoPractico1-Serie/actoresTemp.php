<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Juego de Tronos</title>
</head>

<body>
    <main>
        <header>
            <h1>Serie Juego de Tronos</h1>
        </header>
        <div>
            <?php
            include 'lib/serie.php';

            $bddd = new Serie();
            $listado = $bddd->listaActoresTemporada();

            echo "<table class='actores'>";
            echo "<tr><th colspan='4'>ACTORES</th></tr>";
            echo "<tr><th>Actor</th><th>Personaje</th><th>Episodio</th><th>Temporada</th>";
            if ($listado != null) {
                foreach ($listado as $actores) {
                    echo "<tr>";
                    echo "<td>" . $actores['name'] . "</td>";
                    echo "<td>" . $actores['serie_name'] . "</td>";
                    echo "<td>" . $actores['episode'] . "</td>";
                    echo "<td>" . $actores['season'] . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
            ?>
        </div>

    </main>
</body>

</html>