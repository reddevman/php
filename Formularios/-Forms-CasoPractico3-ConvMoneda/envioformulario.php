<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container formulario">
        <h1>La conversión es:</h1>
        <?php

        # if (isset($_POST["X"] && !empty($_POST["X"])){}
            require 'conversion.php';

            $eurosLibras = new Conversion ();
            $eurosLibras->setEuros($_POST["euros"]);

            echo 'La conversión de ' . $eurosLibras->getEuros() . '€ a Libras es de: ' . $eurosLibras->convEurosLibras($eurosLibras->getEuros()) . ".";
        ?>
    </div>
</body>
</html>


