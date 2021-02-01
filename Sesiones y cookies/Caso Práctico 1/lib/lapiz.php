<?php
    class Lapiz extends Articulo {
        
        const NOMBRE = 'lapiz';

        function __construct($cantidad)
        {
            parent::__construct($cantidad);
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - Lápiz</title>
</head>

<body>
    <form action="../carrito.php" method="post">
        <input type="number" name="lapiz" min="0">
        <input type="submit" value="AÑADIR">
    </form>
</body>

</html>