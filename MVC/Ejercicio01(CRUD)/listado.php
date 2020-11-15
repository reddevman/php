<?php
    include 'lib/alumnos.php';

/*  
    SIN HACER USO DE MVC CON CRUD

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
 */
    $listado = new Alumnos();
    $miArrayResultados = $listado->devolverAlumnos();

    foreach ($miArrayResultados as $datos) {
        echo $datos['nombre'] . " " . $datos['apellidos'] . ", " . $datos['edad'] . " años<br>";
    }
    
?>