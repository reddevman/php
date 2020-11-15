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
    $local = $_POST['elocales'];
    $visitante = $_POST['evisitantes'];
    $temporada = $_POST['temps'];
    $filtroPartidos = $bbdd->filtrar($local, $visitante, $temporada);
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>Filtrado NBA</h1>
        </header>
        <section>

                <?php
                if ($filtroPartidos != null) {
                    echo "<table>";
                    echo "<tr><th>Equipo Local</th><th>Ptos.</th><th>Equipo Visitante</th><th>Puntos</th><th>Temporada</th></tr>";
                    foreach ($filtroPartidos as $filtro) {
                        echo "<tr>";
                        echo "<td>" . $filtro['equipo_local'] . "</td><td>" . $filtro['puntos_local'] . "</td><td>" . 
                                      $filtro['equipo_visitante'] . "</td><td>" . $filtro['puntos_visitante'] .
                                      "</td><td>" . $filtro['temporada'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<h3>No hay resultados.</h3>";
                }
                ?>

            </table>
        </section>
    </main>
</body>

</html>