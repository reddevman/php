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

    $bbdd = new Equipo();
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $conferencia = substr($_POST['conferencia'], 1, -1);
    $division = substr($_POST['division'], 1, -1);
    
    if (isset($nombre, $ciudad, $conferencia, $division) && !empty($nombre) && !empty($ciudad)
        && !empty($conferencia) && !empty($division)) {
        $bbdd = new Nba();
        $bbdd->actualizarEquipo($nombre, $ciudad, $conferencia, $division);
    } else {
        echo "No se pudo hacer la consulta de la actualización";
    }
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>CRUD NBA</h1>
        </header>
        <section>
            <h3>El último registro que se ha modificado es:</h3>

            <?php
            $mostrar = $bbdd->mostrarEquipo($nombre);
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
            echo "<a class='enlaces' href='actualizar.php?nombre=" . $nombre . "'>Actualizar registro.</a>";
            echo "<a class='enlaces' href='borrarDB.php?nombre=" . $nombre . "'>BORRAR</a>";
            ?>
            
            
        </section>
    </main>
</body>