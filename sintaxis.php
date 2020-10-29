<?php
    $nombre = "Pepe";
    $otro = "Jose";
    $numero = 9;
    $numeroDecimal = 10.2;
    $verdadero = true;
    // '' No interpreta el código de las variables, el navegador interpreta los tags html
    echo 'Hola, $nombre' . '<br>';
    // "" interpreta lo que hay dentro sea html o variables, etc.
    echo "Hola, $nombre<br>";
    // El punto es la concatenación
    echo 'Hola, ' . $nombre . "<br>";
    echo gettype($nombre);
    // Se define una constante (nombre, valor)
    define('PI', 3.14);
    echo PI;
