<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Recibidas</title>
</head>

<body>
    <?php
    // 1º -
    //Se recibe por GET o POST el valor del formulario
    $nombre = $_POST['nombre'];

    // 2º -
    // Se crea la cookie con su nombre, valor y tiempo de caducidad
    // Hay más parámetros pero estos son los más usados
    setcookie('nombre', $nombre, time() + 4800);

    // 3º - 
    // Controlamos si se ha creado la cookie correctamente con issed e if
    // mostrando su valor
    if (isset($_COOKIE['nombre'])) {
        echo "La cookie tiene el valor de " . $_COOKIE['nombre'];
    } else {
        echo "Cookie no generada";
    }

    ?>
</body>

</html>