<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Jugadores por Equipo</title>
</head>
<body>
    <fieldset>
    <?php
        include 'lib/nba.php';
        $bbdd = new Nba();
        $equipo = substr($_POST['equipo_seleccionado'],1,-1);

        echo "<legend><b>Listado de jugadores del equipo " . $equipo . "</b></legend>";
        $listado = $bbdd->devolverJugadoresPorEquipo($equipo);

        if ($listado != null) {
            echo "<table>";
            echo "<tr><th>Nombre</th><th>Procedencia</th><th>Altura</th><th>Peso</th><th>Posición</th></tr>";
            foreach ($listado as $jugador) {
                echo "<tr><td>" . $jugador['Nombre'] . "</td><td>" . $jugador['Procedencia'] . "</td><td>" . $jugador['Altura'] . 
                     "</td><td>" . $jugador['Peso'] . "</td><td>" . $jugador['Posicion'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h3>No hay resultados en la tabla elegida</h3>";
        }
    ?>
    </fieldset>
</body>
</html>