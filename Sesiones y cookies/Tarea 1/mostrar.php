<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1 SESIONES</title>
</head>

<body>
    <?php
    $inputSessionName = $_POST['nombre'];
    echo $inputSessionName;
    echo "<a href='index.php?nombre=" . $inputSessionName . "'>ATRÁS</a>";
?>
</body>

</html>