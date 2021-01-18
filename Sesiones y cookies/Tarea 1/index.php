<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1 SESIONES</title>
</head>

<body>
    <?php
    include "mostrar.php";
    session_start();
    if (isset($inputSessionName) && !empty($inputSessionName)) {
        $inputSessionName = $_REQUEST['nombre'];
    } else{
        $inputSessionName = [];
    } 
    ?>
    <form action="mostrar.php" method="post">
        <label for="nombre">Introduce un nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>