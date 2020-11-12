<?php
    include 'lib/alumnos.php';

    
    # CÓDIGO PARA PODER INSERTAR UN ALUMNO

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];

    if (isset($nombre,$apellidos,$edad) && !empty($nombre) && !empty ($apellidos)) {
        $alumnoNuevo = new Escuela();
        $alumnoNuevo->insertarAlumno($nombre,$apellidos,$edad);
        echo "Alumno almacenado en la base de datos.";
    } else {
        echo "No se han introducido todos los datos requeridos.";
    }


    /*
    CÓDIGO PARA PODER ACTUALIZAR LOS DATOS DE UN ALUMNO

    $id = $_POST["id"];
    $nombre = $_POST["nombreUp"];
    $apellidos = $_POST["apellidosUp"];
    $edad = $_POST["edadUp"];

    if (isset($nombre,$apellidos,$edad) && !empty($nombre) && !empty ($apellidos) && !empty($edad)) {
        $alumnoActualizado = new Escuela();
        $alumnoActualizado->actualizarAlumno($id,$nombre,$apellidos,$edad);
        echo "Datos actualizados correctamente";
    } else {
        echo "No se pudo actualizar los datos del alumno";
    }
    */
?>