<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    /* Crearemos una tabla de valores de seno y coseno de -1 a 1 en incremento de 0.1. Los valores
    negativos que resulten los queremos mostrar en rojo, y los valores positivos en azul.*/
        for ($i=-1; $i<=1 ; $i+=0.1) {
    
            echo "<table border='1'>";
            $seno = sin ($i);
            $coseno = cos ($i);
            echo "<tr><th>SENO</th></tr>";
            echo "<tr>";
            if ($seno<0) {
                echo "<td style='color:red'>";
            } else {
                echo "<td style='color:blue'>";
            }
            echo $seno . "</td>";
            echo "</tr>";

            echo "<tr><th>COSENO</th></tr>";
            echo "<tr>";
            if ($coseno<0) {
                echo "<td style='color:red'>";
            } else {
                echo "<td style='color:blue'>";
            }
            echo $coseno . "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>