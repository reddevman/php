<?php
    include 'lib/escuela.php';

    $listado1 = new Escuela();
    $resultado = $listado1->devolverAlumnos();

    if ($resultado != null) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "La información del alumno es la siguiente: <br>" . $fila['nombre'] . ".<br>";
            echo $fila['apellidos'] . ".<br>";
            echo $fila['edad'] . " años.<br>";
        }
    }

?>