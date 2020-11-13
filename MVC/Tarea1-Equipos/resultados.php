<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Equipo</title>
</head>

<body>
    <fieldset>
        <?php
            include 'lib/nba.php';

            $bbdd = new Nba();
            # Substring para recortar el nombre del equipo, sino lo toma como .Equipo. y no da datos
            $equipo = substr($_POST['equipo_seleccionado'],1,-1);

            echo "<legend><b>Resultados para el equipo " . $equipo . "</b></legend>";

            $listado = $bbdd->devolverPartidosPorEquipo($equipo);

            if ($listado != null) {
                echo "<table>";
                echo "<tr><th>Local</th><th>Puntos</th><th>Visitante</th><th>Puntos</th><th>Temporada</th></tr>";
                foreach ($listado as $partidos) {
                    echo "<tr><td>" . $partidos['equipo_local'] . "</td><td>" . $partidos['puntos_local'] . 
                         "</td><td>" . $partidos['equipo_visitante'] . "</td><td>" . $partidos ['puntos_visitante'] . 
                         "</td><td>" . $partidos ['temporada'] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>No hay resultados en la tabla elegida.</h3>";
            }
        ?>
    </fieldset>
</body>

</html>