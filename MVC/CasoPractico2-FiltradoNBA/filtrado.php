<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Filtrado NBA</title>
</head>

<body>
    <!-- PASOS CREACIÓN DE FILTRADO.PHP

- Creación de instancias del objeto principal que contiene las consultas
- Recogia de datos mediante $_POST y substring para recoger el campo adecuadamente
- Variable que recogerá el método filtrar() que contendrá la sentencia sql con los resultados
- Comprobación mediante isset y empty
- Creación de la tabla dentro de un if que comprueba si los datos son null
- Bucle foreach para recorrer el array asociativo y mostrar cada campo en la tabla y sus celdas

--->

    <?php
    # Objeto de Nba, recogida de datos en variables
    include 'lib/nba.php';
    $bbdd = new Nba();
    $local = substr($_POST['elocales'], 1, -1);
    $visitante = substr($_POST['evisitantes'], 1, -1);
    $temporada = substr($_POST['temps'], 1, -1);
    $filtroPartidos = $bbdd->filtrar($local, $visitante, $temporada);
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>Filtrado NBA</h1>
        </header>
        <section>

            <?php
            if (isset($local, $visitante, $temporada) && !empty($local) && !empty($visitante) && !empty($temporada)) {

                # Recorrido del array de la consulta y muestra en una tabla
                if ($filtroPartidos != null) {
                    echo "<table>";
                    echo "<tr><th>Equipo Local</th>
                              <th>Ptos.</th>
                              <th>Equipo Visitante</th>
                              <th>Puntos</th>
                              <th>Temporada</th></tr>";
                    foreach ($filtroPartidos as $filtro) {
                        echo "<tr>";
                        echo "<td>" . $filtro['equipo_local'] . "</td>
                              <td>" . $filtro['puntos_local'] . "</td>
                              <td>" . $filtro['equipo_visitante'] . "</td>
                              <td>" . $filtro['puntos_visitante'] . "</td>
                              <td>" . $filtro['temporada'] . "</td>";
                        echo "</tr>";
                    }

                    /* OPCIÓN CON WHILE sin devolver un array en la función filtrar()
                    while ($fila = $filtroPartidos->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['equipo_local'] . "</td>";
                        echo "<td>" . $fila['puntos_local'] . "</td>";
                        echo "<td>" . $fila['equipo_visitante'] . "</td>";
                        echo "<td>" . $fila['puntos_visitante'] . "</td>";
                        echo "<td>" . $fila['temporada'] . "</td>";
                        echo "</tr>";
                    }*/
                    echo "</table>";
                } else {
                    echo "<h3>No hay resultados.</h3>";
                }
            } else {
                echo "Hay un error en la recogida de datos.";
            }
            ?>

            </table>
        </section>
    </main>
</body>

</html>