<?php
    include 'lib/escuela.php';

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];

    if (isset($nombre,$apellidos,$edad) && !empty($nombre) && !empty ($apellidos) && !empty($edad)) {
        $alumnoNuevo = new Escuela();
        $alumnoNuevo->insertarAlumno($nombre,$apellidos,$edad);
        echo "Alumno almacenado en la base de datos.";
    } else {
        echo "No se han introducido todos los datos requeridos.";
    }
?>