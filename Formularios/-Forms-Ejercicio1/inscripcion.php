<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Formularios (validación)</title>
</head>
<body>
    <?php
    var_dump($_POST);
    echo '<br>';
    echo "El nombre recibido es: " . $_POST["nombre"] . "<br>";
    echo "El apellido recibido es: " . $_POST["apellidos"] . "<br>";
    echo "La edad recibida es: " . $_POST["edad"];
    ?>
</body>
</html>


