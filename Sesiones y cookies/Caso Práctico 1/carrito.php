<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE['lapiz'])) {
        $valor = $_COOKIE['lapiz'];
        setcookie('lapiz', $valor);
        echo "Cookie generada";
    } else {
        $valor = $_COOKIE['lapiz'];
        setcookie('lapiz', $valor);
    }
    if (isset($_COOKIE['lapiz'])) {
        echo "Lápices en la cesta = " . $_COOKIE['lapiz'];
    }
    ?>
</body>

</html>