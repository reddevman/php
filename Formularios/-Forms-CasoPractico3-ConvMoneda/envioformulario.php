<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            require 'conversion.php';

            $eurosLibras = new Conversion ();
            $eurosLibras->setEuros($_POST["euros"]);

            echo 'La conversión de ' . $eurosLibras->getEuros() . '€ a Libras es de: ' . $eurosLibras->convertir($eurosLibras->getEuros());
        ?>
    </div>
</body>
</html>


