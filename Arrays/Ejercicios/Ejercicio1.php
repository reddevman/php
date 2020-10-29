<?php
//Almacenar en un vector los 10 primeros número pares. Imprimir cada uno en una línea.

echo 'Almacenar en un vector los 10 primeros número pares. Imprimir cada uno en una línea. <br>';
//$arrayNumeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$arrayNumeros = array ();
// Desde qué índice se parte en el array
$indice = 0;
// A partir de qué número se va a empezar a buscar los pares
$numero = 0;

// Entra en el bucle while hasta que el indice sea 10
while ($indice < 10) {
    if ($numero % 2 == 0) {
        // Almacena en el indice en el que se haya el bucle, el número por el que va
        $arrayNumeros [$indice] = $numero;
        // Incrementa el índice para que pase al siguiente hasta 10
        $indice++;
    }
    // Incrementa número para que pase al siguiente
    $numero++;
}

// Bucle foreach con un condicional para mostrar sólo sin son pares
foreach ($arrayNumeros as $pares) {
    //if ($pares % 2 == 0) {
            echo $pares . '<br>';
        //}
    } 
?>