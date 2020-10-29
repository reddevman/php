<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            text-align: center;
            border-collapse: collapse;
        }
        table tr td {
            padding: 10px;
        }
        #suma {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table border = 1>
<?php
/* Crear un array de 6x6 con números enteros en PHP, de forma que muestre por
pantalla el array en forma de tabla HTML y el número de la fila cuya suma sea
mayor que las demás. */

  /* ********************************
  array (     1   2   3   4   5   6
    1 array (num,num,num,num,num,num),
    2 array (num,num,num,num,num,num),
    3 array (num,num,num,num,num,num),
    4 array (num,num,num,num,num,num),
    5 array (num,num,num,num,num,num),
    6 array (num,num,num,num,num,num)
      );
  ***********************************/

// Se crea el array vacío
$miArray = array();
// Y el array que contendrá la suma de cada fila
$sumaFilas = array ();

// Recorremos el array fijándolo a una logitud de 6*6 como indica el ejercicio
for ($i=0; $i < 6; $i++) {
    echo '<tr>';

    // OPCIÓN SIN FUNCIONES, DICE CUÁL ES LA FILA MÁXIMA
    $fila_maximo = 0;
    $valor_maximo = 0;


    for ($j=0; $j < 6; $j++) {
        // Generación de un número aleatorio del 1 al 100 (elección propia)
        $numAleatorios = rand(1, 100);
        // Asignamos a cada posición dicho número aleatorio
        $miArray [$i][$j] = $numAleatorios;

        $suma += $miArray[$i][$columna];

        echo '<td>';
        // Mostramos el número en cada celda
        echo $miArray[$i][$j] . '<br>';
        echo '</td>';
    }

    // OPCIÓN SIN FUNCIONES
    if ($suma>$valor_maximo) {
        // Da el valor máximo
        $valor_maximo = $suma;
        // Te dice cuál es la fila
        $fila_maximo = $fila;
    }




    // Dentro del mismo bucle for principal, creamos la suma de las filas
    /* Según la posición suma todas las posiciones de $i (fila)
    mediante la función array_sum() */
    $sumaFilas [$i] = array_sum($miArray[$i]);
    echo '<td id="suma">';
    // Muestra la suma en una celda de la tabla
    echo $sumaFilas[$i] . '<br>';
    echo '</td>';
    echo '</tr>';
}
echo '</table><br>';

/* La función min() y max() facilita localizar en un array el menor y el mayor
en este caso, en el array que hemos creado de las sumas ($sumaFilas)*/
echo 'El menor es ' . min($sumaFilas) . '<br>';
echo 'El mayor es ' . max($sumaFilas);
?>
</body>
</html>