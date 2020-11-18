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
    include "lib/equipo.php";

    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $conferencia = substr($_POST['conferencia'], 1, -1);
    $division = substr($_POST['division'], 1, -1);

    if (isset($nombre, $ciudad, $conferencia, $division) && !empty($nombre) && !empty($ciudad)
        && !empty($conferencia) && !empty($division)) {
        $bbdd = new Equipo();
        $bbdd->insertarEquipo($nombre, $ciudad, $conferencia, $division);
    } else {
        echo "No se pudo hacer la consulta de la inserción";
    }
    ?>
    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <?php
            $mostrar = $bbdd->mostrarEquipo($nombre);
            echo "<h3>El último registro que se ha añadido es:</h3>";
            if ($mostrar != null) {
                foreach ($mostrar as $nuevo) {
                    echo "<b>Nombre: </b>" . $nuevo['Nombre'] . "<br>";
                    echo "<b>Ciudad: </b>" . $nuevo['Ciudad'] . "<br>";
                    echo "<b>Conferencia: </b>" . $nuevo['Conferencia'] . "<br>";
                    echo "<b>División: </b>" . $nuevo['Division'] . "<br>";
                }
            } else {
                echo "Error en la muestra de resultados.";
            }
            echo "<br>";
            echo "<a href='actualizar.php'>Actualizar registro.</a>";
            echo "<a href='borrarDB.php?nombre=" . $nuevo ['Nombre'] . "'>BORRAR</a>";
            ?>
            

        </section>
    </main>
</body>

</html>