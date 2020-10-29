<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas con While</title>
</head>
<body>
    <h1>TABLA DE MULTIPLICAR CON BUCLE WHILE EN PHP</h1>
    <?php
    // Mostrar las tablas de multiplicar del 1 al 10 utilizando el bucle while
        $i = 1;
        $j = 1;
        while ($i <= 10) {
            echo "<table border=1>";
            echo "Tabla de multiplicar de $i";
            while ($j <= 10) {
                echo "<tr><td><b>" . $i . "</b></td><td> * </td><td>" . $j . "</td><td> = </td><td>" . $i*$j . "</td></tr>"; 
                $j++;
            }
        // Se reinicia $j para que empiece desde 1, ya que en el último incremento vale 11 y rompe el bucle    
        $j = 1;
        echo "</table>";
        $i++;
        }
    ?>
</body>
</html>