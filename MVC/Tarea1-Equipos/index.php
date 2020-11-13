<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer modelo NBA</title>
    <style>
        body {
            background: #e6f7ff;
        }
    </style>
</head>

<body>
    <h1>Tarea 1 Unidad 5 - Creación de un primer modelo</h1>

    <?php
    include 'lib/nba.php';

    $bbdd = new Nba();

    $listadoEquipos = $bbdd->listaEquipos();
    $datosEquipos = $bbdd->listaEquipos();
    $maximosAnotadores = $bbdd->devolverMaxAnotadores();
    $maximosAsistentes = $bbdd->devolverMaxAsistentes();
    ?>

    <!-- *** INICIO SELECTS PARTE SUPERIOR DE LA WEB *** -->
    <!-- Uso de variables $listadoEquipos y $datosEquipos -->
    <fieldset>
        <fieldset style="width:48%; float:left">
            <legend>Mostrar <b>PARTIDOS</b> por Equipo</legend>
            <form action="resultados.php" method="post">

                <?php
                # 1º - Se evalúa si contiene datos
                if ($listadoEquipos != null) {
                    echo "<label>Nombre del equipo</label><br>";
                    echo "<select name='equipo_seleccionado'>";

                    # 2º - Recorrido del array para insertar como nombre de cada <option> el nombre del equipo
                    foreach ($listadoEquipos as $equipos) {
                        # $nombreEquipo es una variable creada para construir el <option>
                        $nombreEquipo = $equipos['Nombre'];
                        echo "<option value=\". $nombreEquipo .\">" .$nombreEquipo . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo "<h3>No hay resultados.</h4>";
                }
                ?>

                <input type="submit" value="Ver partidos">
            </form>
        </fieldset>

        <fieldset style="width:48%; float:right">
            <legend>Mostrar <b>DATOS</b> de un Equipo</legend>
            <form action="litsa.php" method="post">

                <?php
                if ($datosEquipos != null) {
                    echo "<label>Nombre del equipo</label><br>";
                    echo "<select name=\"equipo_seleccionado\">";

                    foreach ($datosEquipos as $equipos2) {
                        $nombreEquipo = $equipos2['Nombre'];
                        echo "<option value=\" . $nombreEquipo . \">" . $nombreEquipo . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo "<h3>No hay resultados.</h3>";
                }
                ?>

                <input type="submit" value="Ver partidos">
            </form>
        </fieldset>
    </fieldset>
    <!--  *** FIN SELECTS PARTE SUPERIOR DE LA WEB *** -->

    <!-- *** INICIO TABLAS DE INFORMACIÓN *** -->
    <!-- Uso de variables $maximosAnotadores y $maximosAsistentes -->
    <fieldset>
        <legend>Máximos anotadores y asistencias por temporada</legend>

        <?php
        echo "<div style=\"width:48%;float:left\">";
        # Tabla ANOTADORES
        if (count($maximosAnotadores) > 0) {
            echo "<table border=1>";
            echo "<tr><th>Puntuación</th><th>Nombre</th><th>Equipo</th><th>Temporadas</th>";
            for ($i = 0; $i < count($maximosAnotadores); $i++) {
                $anotador = $maximosAnotadores[$i];
                echo "<tr><td>" . $anotador[0] . "</td><td>" . $anotador[1] .
                    "</td><td>" . $anotador[2] . "</td><td>" . $anotador[3] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h3>No hay resultados</h3>";
        }
        echo "</div>";

        # Tabla ASISTENCIAS
        echo "<div style=\"width:48%;float:right\">";
        if (count($maximosAsistentes) > 0) {
            echo "<table border=1>";
            echo "<tr><th>Asistencias</th><th>Nombre</th><th>Equipo</th><th>Temporadas</th>";
            for ($i = 0; $i < count($maximosAsistentes); $i++) {
                $asistencia = $maximosAsistentes[$i];
                echo "<tr><td>" . $asistencia[0] . "</td><td>" . $asistencia[1] .
                    "</td><td>" . $asistencia[2] . "</td><td>" . $asistencia[3] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h3>No hay resultados</h3>";
        }
        ?>

    </fieldset>
    <!-- *** FIN TABLAS DE INFORMACIÓN *** -->
</body>

</html>