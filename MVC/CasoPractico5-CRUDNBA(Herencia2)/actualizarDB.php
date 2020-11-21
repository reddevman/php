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
    include "lib/jugador.php";

    $bbdd = new Jugador();
    $nombre = $_POST['nombre'];
    $procedencia = $_POST['procedencia'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $posicion = substr($_POST['posicion'], 1, -1);
    $equipo = substr($_POST['equipo'], 1, -1);
    
    if (isset($nombre, $procedencia, $altura, $peso, $posicion, $equipo) && !empty($nombre) && !empty($procedencia)
    && !empty($altura) && !empty($peso) && !empty($posicion) && !empty($equipo)) {
        $bbdd = new Jugador();
        $bbdd->actualizarJugador($nombre, $procedencia, $altura, $peso, $posicion, $equipo);
    } else {
        echo "No se pudo hacer la consulta de la actualización";
    }
    ?>

    <main>
        <header>
            <a href="index.php"><img src="css/NBA-logo.png" alt="logo nba"></a>
            <h1>CRUD NBA</h1>
        </header>
        <section>
            <h3>El último registro que se ha modificado es:</h3>

            <?php
            $mostrar = $bbdd->mostrarJugador($nombre);
            if ($mostrar != null) {
                foreach ($mostrar as $nuevo) {
                    echo "<b>Nombre: </b>" . $nombre . "<br>";
                    echo "<b>Ciudad: </b>" . $procedencia . "<br>";
                    echo "<b>Conferencia: </b>" . $altura . "<br>";
                    echo "<b>Peso: </b>" . $peso . "<br>";
                    echo "<b>Posición: </b>" . $posicion . "<br>";
                    echo "<b>Equipo: </b>" . $equipo . "<br>";
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