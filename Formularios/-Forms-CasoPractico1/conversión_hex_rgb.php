<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Conversor RGB-HEX</title>
</head>

<body>
    <h3>El valor RGB es:</h3>
    <?php
        $colorHex = $_POST["hexa"];
        # Ejemplo de hexadecimal para extraer #\FFFFFF
        # Si tiene un valor (isset) y no está vacía (empty)
        if (isset($_POST["hexa"]) && !empty($_POST["hexa"])) {

            $red = substr($colorHex, 1, 2);
            $green = substr($colorHex, 3, 2);
            $blue = substr($colorHex, -2);

            $decRed = hexdec($red);
            $decGreen = hexdec($green);
            $decBlue = hexdec($blue);
            $decimal = $decRed . $decGreen . $decBlue;
        } else echo 'Valores incorrectos';

        echo 'El color en RGB es: ' . $decRed . ',' . $decGreen . ',' . $decBlue;
    ?>
</body>

</html>