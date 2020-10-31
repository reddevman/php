<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container formulario">
        <h1 class="text-success">La conversión es:</h1>
        <?php
        require 'conversion.php';

        /*
          Dentro de cada if está la conversión para cada tipo de moneda.
          Para cada caso se hace un objeto nuevo de Conversion, luego se llama a setX para
          establecer en la propiedad del objeto la moneda que el usuario quiere convertir según
          el caso, con el método global $_POST[].
          A continuación en el echo se llama al método que convierte la moneda.
        */

        # EUROS A LIBRAS
        if (isset($_POST["eurosL"]) && !empty($_POST["eurosL"])) {
            $eurosLibras = new Conversion();
            $eurosLibras->setEuros($_POST["eurosL"]);

            echo '<br>La conversión de ' . $_POST["eurosL"] . 'Euro/s a Libra/s es de: <b>' . $eurosLibras->convEurosLibras() . "</b>.<br>";
        } else echo '<br>-- No está especificada la cantidad para la conversión de Euros a Libras. --<br>';
        

        # LIBRAS A EUROS
        if (isset($_POST["libras"]) && !empty($_POST["libras"])) {
            $librasEuros = new Conversion();
            $librasEuros->setLibras($_POST["libras"]);

            echo '<br>La conversión de ' . $_POST["libras"] . ' Libra/s a Euro/s es de: <b>' . $librasEuros->convLibrasEuros() . "</b>.<br>";
        } else echo '<br>-- No está especificada la cantidad para la conversión de Libras a Euros. --<br>';


        # EUROS A DÓLARES
        if (isset($_POST["eurosD"]) && !empty($_POST["eurosD"])) {
            $eurosDolares = new Conversion();
            $eurosDolares->setEuros($_POST["eurosD"]);

            echo '<br>La conversión de ' . $_POST["eurosD"] . 'Euro/s a Dólar/es es de: <b>' . $eurosDolares->convEurosDolares() . "</b>.<br>";
        } else echo '<br>-- No está especificada la cantidad para la conversión de Euros a Dólares. --<br>';


        # DÓLARES A EUROS
        if (isset($_POST["dolares"]) && !empty($_POST["dolares"])) {
            $dolaresEuros = new Conversion();
            $dolaresEuros->setDolares($_POST["dolares"]);

            echo '<br>La conversión de ' . $_POST["dolares"] . ' Dólar/es a Euro/s es de: <b>' . $dolaresEuros->convDolaresEuros() . "</b>.<br>";
        } else echo '<br>-- No está especificada la cantidad para la conversión de Dólares a Euros. --<br>';
        ?>
    </div>
</body>

</html>