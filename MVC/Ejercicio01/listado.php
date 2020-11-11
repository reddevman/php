<?php
    include 'lib/escuela.php';

    $listado1 = new Escuela();
    $resultado = $listado1->devolverAlumnos();

    echo "La información de los alumnos es la siguiente: <br><br>";
    if ($resultado != null) {
        while ($fila = $resultado->fetch_assoc()) {
            echo $fila['nombre'] . ".<br>";
            echo $fila['apellidos'] . ".<br>";
            echo $fila['edad'] . " años.<br>";
            echo "<hr>";
        }
    }
?>