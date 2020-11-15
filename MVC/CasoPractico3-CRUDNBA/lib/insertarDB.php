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
    include 'nba.php';
    $bbdd = new Nba();
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $conferencia = $_POST['conferencia'];
    $division = $_POST['division'];
    if (
        isset($nombre, $ciudad, $conferencia, $division) && !empty($nombre) && !empty($ciudad)
        && !empty($conferencia) && !empty($division)
    ) {
        $insercion = $bbdd->insertarEquipo($nombre, $ciudad, $conferencia, $division);
    } else {
        echo "No se pudo hacer la consulta de la inserción";
    }
    $mostrar = $bbdd->mostrarEquipo($nombre);
    ?>

    <main>
        <header>
            <img src="css/NBA-logo.png" alt="logo nba">
            <h1>CRUD NBA</h1>
        </header>
        <section>

            <?php
            echo "<h3>El último registro que se ha añadido es:</h3>";
            if ($insercion != null) {
                foreach ($insercion as $nuevo) {
                    echo "<b>Nombre: </b>" . $nuevo['Nombre'] . "<br>";
                    echo "<b>Ciudad: </b>" . $nuevo['Ciudad'] . "<br>";
                    echo "<b>Conferencia: </b>" . $nuevo['Conferencia'] . "<br>";
                    echo "<b>División: </b>" . $nuevo['División'] . "<br>";
                }
            } else {
                echo "Error en la muestra de resultados.";
            }
            ?>

        </section>
    </main>
</body>

</html>