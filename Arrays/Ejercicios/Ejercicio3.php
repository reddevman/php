<?php
/*Escriba un programa que muestre una tirada de un número de dados al azar
entre 2 y 7 (dados) e indique los valores.*/

/* Generamos un número aleatorio entre 2 y 7 que usaremos para generar
tantas posiciones de array (nº de dados) como surjan de ese número*/
$numeroDados = rand (2,7);

// Creación de un array vacío
$dados = array ();

/* Se rellena el array con la longitud determinada por el número aleatorio
obtenido antes */
// Bucle for para rellenar cada posición (o dado) con un número
for ($i=0; $i < $numeroDados; $i++) { 
    $dados [$i] = rand (1,6);
}

// Mostramos las tiradas de cada dado (array ya relleno)
foreach ($dados as $tiradas) {
    echo $tiradas . '<br>';
}
?>
