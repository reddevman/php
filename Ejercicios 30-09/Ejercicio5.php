<?php
// Mostrar las tablas de multiplicar del 1 al 10. Utilizar bucle for.
    for ($i=1; $i <= 10 ; $i++) {
        for ($j=1; $j <= 10 ; $j++) {
            echo $i . "*" . $j . "=" . $i*$j . "<br>";
        }
    }
?>