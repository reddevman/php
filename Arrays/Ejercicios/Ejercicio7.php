<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border: 5px solid black;
      border-collapse: collapse;
      text-align:center;
    }
    table tr td {
      padding: 20px;
    }
  </style>
</head>
<body>
  <h3>Múltiplos de 3 en un array de 6*4</h3>
  <table border=1>
  <?php
  /*Generar en PHP un array bidimensional de 6 x 4 tal que cada fila contenga los
  sucesivos múltiplos de 3 desde el 3 en adelante. Mostrar el array en una tabla HTML.
  UN NÚMERO ES MÚLTIPLO DE OTRO CUANDO SU DIVISIÓN TIENE DE RESTO CERO (DIVISIÓN EXACTA)
  */
  /* *************************
  array (     1   2   3   4   
    1 array (num,num,num,num),
    2 array (num,num,num,num),
    3 array (num,num,num,num),
    4 array (num,num,num,num),
    5 array (num,num,num,num),
    6 array (num,num,num,num)
      );
  ***************************/


  // Generamos el array que contendrá los números, vacío
  $miArray = array ();

  // Creamos la variable a partir de la cual se irán generando los múltiplos de 3
  $num = 3;

  // Bucle for para rellenar el array 6*4 con los múltiplos
  for ($fila=0; $fila < 6; $fila++) {
    for ($columna=0; $columna < 4; $columna++) {

      // Rellenamos la primera posición con el número especificado arriba en la variable
      $miArray [$fila][$columna] = $num;

      /* Los múltiplos de 3 se generan sumando de 3 en 3.
      Se modifica la variable original sumándole 3 para que aumente la cifra
      en cada posición y array */
      $num += 3;
    }
  }

  // Bucle foreach para mostrar en tabla los números
  foreach ($miArray as $multiplos) {
  echo '<tr>';
    foreach ($multiplos as $valores) {
      echo '<td>' . $valores . '</td>';
    }
  echo '</tr>';
  }
  ?>
  </table>
</body>
</html>

