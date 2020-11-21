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
    /*
    # Inicio de sesión para almacenar las variable que cogemos de $_POST, para futuros usos
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['ciudad'] = $_POST['nombre'];
    $_SESSION['conferencia'] = substr($_POST['conferencia'], 1, -1);
    $_SESSION['division'] = substr($_POST['division'], 1, -1);*/

    $nombre = $_POST['nombre'];
    $procedencia = $_POST['procedencia'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $posicion = substr($_POST['posicion'], 1, -1);
    $equipo = substr($_POST['equipo'], 1, -1);

    if (isset($nombre, $procedencia, $altura, $peso, $posicion, $equipo) && !empty($nombre) && !empty($procedencia)
        && !empty($altura) && !empty($peso) && !empty($posicion) && !empty($equipo)) {
        $bbdd = new Jugador();
        $bbdd->insertarJugador($nombre, $procedencia, $altura, $peso, $posicion, $equipo);
    } else {
        echo "No se pudo hacer la consulta de la inserción";
    }
    ?>
    <main>
        <header>
            <a href="index.php"><img src="css/NBA-logo.png" alt="logo nba"></a>
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <?php
            //$mostrar = $bbdd->mostrarEquipo($nombre);
            echo "<h3>El último registro que se ha añadido es:</h3>";
            //if ($mostrar != null) {
            //    foreach ($mostrar as $nuevo) {
                    echo "<b>Nombre: </b>" . $nombre . "<br>";
                    echo "<b>Ciudad: </b>" . $procedencia . "<br>";
                    echo "<b>Conferencia: </b>" . $altura . "<br>";
                    echo "<b>Peso: </b>" . $peso . "<br>";
                    echo "<b>Posición: </b>" . $posicion . "<br>";
                    echo "<b>Equipo: </b>" . $equipo . "<br>";
            //    }
            //} else {
            //    echo "Error en la muestra de resultados.";
            //}
            echo "<br>";
            echo "<a class='enlaces' href='actualizar.php?nombre=" . $nombre . "'>Actualizar registro.</a>";
            echo "<a class='enlaces' href='borrarDB.php?nombre=" . $nombre . "'>BORRAR</a>";
            ?>
            

        </section>
    </main>
</body>

</html>