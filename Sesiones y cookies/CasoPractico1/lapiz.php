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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Tienda - Lápiz</title>
</head>

<body>
    <div class="main-wrapper">
        <h1>2º DAW - SESIONES Y COOKIES - CASO PRÁCTICO 1</h1>
        <div class="formulario">
            <form action="./proceso.php" method="post">
                <fieldset>
                    <legend>LAPICES</legend>
                    <label for="lapices">CANTIDAD</label>
                    <input type="number" name="lapices" min="0">
                    <input type="submit" value="AÑADIR">
                </fieldset>
            </form>
            <a href="./index.php">INICIO</a>
        </div>
    </div>
    <footer>&copy; ALEJANDRO MÁRQUEZ ARAGONÉS</footer>
</body>

</html>