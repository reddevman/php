<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Escriba un programa que llene con números aleatorios (entre el -5 y el 5)
una matriz de 5*6 y que imprima cuántos de los números almacenados son ceros,
cuántos positivos y cuántos negativos */

/****************************************************
array (      1      2      3      4      5      6
  1 array (rand(),rand(),rand(),rand(),rand(),rand()),
  2 array (rand(),rand(),rand(),rand(),rand(),rand()),
  3 array (rand(),rand(),rand(),rand(),rand(),rand()),
  4 array (rand(),rand(),rand(),rand(),rand(),rand()),
  5 array (rand(),rand(),rand(),rand(),rand(),rand())
    );
*****************************************************/


// 1-> Inicializamos el array vacío
$miArray = array ();

// 2-> Indicamos la longitud del array externo e interno que usaremos en el bucle for
// Recomendable hacerlo con una constante define ('TAM_FILAS',5)
$arrayExterno = 5;
$arrayInterno = 6;

// 3-> Creamos las variables que almacenarán los conteos de negativos, positivos y ceros
$numNegativos = 0;
$numCeros = 0;
$numPositivos = 0;

/* 4-> 2 bucles for, 1 para recorrer el array externo y una vez dentro recorra el siguiente array (interno).
Indicamos en la longitud del for las variables con las longitudes previamente definidas */

for ($i=0; $i < $arrayExterno; $i++) { 
    for ($j=0; $j < $arrayInterno; $j++) {

        // 5-> Se crea la variable que almacenará los números aleatorios generados con rand () 
        $numerosAleatorios = rand (-5,5);
        // 6-> Se le asigna a cada posición vacía (del segundo array) los números aletorios generados
        $miArray [$i][$j] = $numerosAleatorios;

        echo 'Array número ' . $i . ': ';
        echo $miArray [$i][$j] . '  <br>';

        // 7-> Condición que comprueba si es negativo, cero o positivo...
        if ($miArray [$i][$j] == 0) {
            // ...e incrementa la variable correspondiente para usarla como contador
            $numCeros ++;
        }

        else if ($miArray [$i][$j] > 0) {
            $numPositivos ++;
        }

        else {
            $numNegativos ++;
        }
    }
    echo '<br>';
}

echo 'Hay ' . $numNegativos . ' números negativos. <br>';
echo 'Hay ' . $numCeros . ' ceros. <br>';
echo 'Hay ' . $numPositivos . ' números positivos. <br>';

?>
</body>
</html>