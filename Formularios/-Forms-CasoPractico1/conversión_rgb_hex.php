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
    <h3>El valor hexadecimal es:</h3>
    <?php
        
        # Se almacena en cada variable lo que recoge el método $_POST[]
        $red = $_POST["red"];
        $green = $_POST["green"];
        $blue = $_POST["blue"];

        # Ejecución de la función creada para cada variable de color
        $hexaRed = comprobarRango($red);
        $hexaGreen = comprobarRango($green);
        $hexaBlue = comprobarRango($blue);

        /* Bucle para comprobar si los valores están correctos (true),
        entonces se crea el hexadecimal final */
        while ($hexaRed && $hexaGreen && $hexaBlue == true) {
            $hexadecimal = $hexaRed . $hexaGreen . $hexaBlue;
            echo 'El color en hexadecimal es #' . $hexadecimal;
        }

        # Función para comprobar el rango que debe estar entre 0 y 255
        function comprobarRango ($colorrgb){
            # Si el parámetro del color está entre esos valores...
            if ($colorrgb >=0 && $colorrgb <=255) {
                # ...se convierte a hexadecimal el color con dechex()
                $hexa = dechex($colorrgb);
                # Y lo devuelve para su uso posterior
                return $hexa;
            } else echo $colorrgb . ' no está dentro del rango de colores hexadecimales.';
        }
    ?>
</body>
</html>