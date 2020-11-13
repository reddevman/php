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
        <div id="wrap-buttons">
            <form action="actores.php" method="post" id="form-actores">
                <input type="submit" value="ACTORES">
            </form>
            <form action="actoresTemp.php" method="post" id="form-actores-temporada">
                <input type="submit" value="ACTORES POR EPISODIO">
            </form>
        </div>
        <div id="wrap-titles">
            <?php
            include 'lib/serie.php';
            $resumen = new Serie();
            $listado = $resumen->resumenSerie();

            echo "<table>";
            echo "<tr><th>Título Serie</th><th>Creadores</th><th>Año Inicio</th><th>Año Fin</th>
                     <th>Argumento</th>";
            for ($i = 0; $i < count($listado); $i++) {
                $informacion = $listado[$i];
                echo "<tr>";
                echo "<td>" . $informacion['title'] . "</td>";
                echo "<td>" . $informacion['creators'] . "</td>";
                echo "<td>" . $informacion['season_start'] . "</td>";
                echo "<td>" . $informacion['season_end'] . "</td>";
                echo "<td>" . $informacion['plot'] . "</td>";
                echo "</tr>";
            }
            ?>
        </div>

    </main>
</body>

</html>