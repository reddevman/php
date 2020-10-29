<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1>Números del 1 al 10</h1>
    <label for="numeros">Elige un número:</label>
    <?php
/*Crear un select en HTML que tenga los números del 1 al 10 como opciones. El número de valores
del select(10) estará definido en una constante.*/
    echo "<select name='numeros' id='numeros'>";

        define('OPCIONES',10);
        for ($i=1; $i <= OPCIONES; $i++) { 
            echo "<option value=$i> $i </option><br>";
        }
    echo "</select>";
    ?>
</body>

</html>