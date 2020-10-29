<?php
    $array2 = array (array ('Uno','Dos'),array ('Pepe','Juan'));
    foreach ($array2 as $miarray) {
        foreach ($miarray as $elemento) {
            echo $elemento . '<br>';
        }
    }


    $semana = array ('Lunes','Martes','Miércoles','Jueves','Viernes');
    sort ($semana);
        foreach ($semana as $días) {
            echo $días . '<br>';
        }
    echo count ($semana) . '<br>';

    rsort ($semana);
        foreach ($semana as $días) {
            echo $días . '<br>';
        }

    /* ARRAY asociativos
    arsort, asort (ordena por valores)
    ksort (ordena por claves)*/

    // range() crea un array con números entre los 2 valores que especifiquemos
    $numeros = range (5, 100);
    // shuffle() mezcla los números de manera aleatoria
    shuffle ($numeros);
    foreach ($numeros as $numero) {
        echo $numero . '<br>';
    }

    echo '<h2>Mezcla de arrays</h2>';
    $mezcla = array_merge ($semana, $numeros);
    foreach ($mezcla as $elementos) {
        echo $elementos . '<br>';
    }
    print_r($mezcla);

?>