<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <table border = "1">
<?php
// Mostrar las tablas de multiplicar del 1 al 10. Utilizar bucle for.
    for ($i=1; $i <= 10 ; $i++) {
        echo '<tr>';
        for ($j=1; $j <= 10 ; $j++) {
            echo '<td>';
            echo $i . "*" . $j . "=" . $i*$j;
            echo '</td>';
        }
        echo '</tr>';
    }
?>
</table>
</body>
</html>