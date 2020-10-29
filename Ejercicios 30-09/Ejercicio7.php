<?php
/* Mostrar el mayor de 3 variables numéricas (Ejemplo de mensaje: La variable
$a tiene el valor mayor: 10) */
    $a = 5;
    $b = 10;
    $c = 2;
    if ($a>$b && $a>$c) {
        echo "La variable (a) es el mayor de los números";
    } elseif ($b>$a && $b>$c) {
        echo "La variable (b) es el mayor de los números";
    } elseif ($c>$a && $c>$b) {
        echo "La variable (c) es el mayor de los números";
    }
?>