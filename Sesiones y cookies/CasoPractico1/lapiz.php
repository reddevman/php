<?php

// include './articulo.php';
// class Lapiz extends Articulo {

//     const NOMBRE = 'lapiz';

//     function __construct($cantidad)
//     {
//         parent::__construct($cantidad);
//     }

//     function mostrarLapiz() {
//         echo self::NOMBRE;
//         echo "<br>";
//         echo $this->getCantidad();
//     }
// }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - Lápiz</title>
</head>

<body>
    <form action="./proceso.php" method="post">
        <label for="lapices">LAPICES</label>
        <input type="number" name="lapices" min="0">
        <input type="submit" value="AÑADIR">
    </form>
    <a href="./index.php">INICIO</a>
</body>

</html>