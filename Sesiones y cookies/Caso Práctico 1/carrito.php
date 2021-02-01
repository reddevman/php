<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>

<body>
    <?php
    $lapices = $_POST['lapiz'];
    if (isset($_COOKIE['lapiz'])) {
        $valor = $_COOKIE['lapiz'] + $lapices;
        setcookie('lapiz', $valor, time() + 24 * 60 * 60);
        echo "Cookie generada con valor: " . $_COOKIE['lapiz'];
    } else {
        echo "No hay cookies.";
    }
    ?>
</body>

</html>