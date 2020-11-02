<?php
/*Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100. Colorear las
filas alternando gris y blanco. Además el tamaño sera una constante (TAM,10).*/

define('TAM', 10);
echo '<table width=10% cellspacing=0>';
$n = 1;
// FILA
for ($i = 1; $i <= TAM; $i++) {
    if ($i % 2 == 0)
        echo '<tr bgcolor=#bdc3d6>';
    else
        echo '<tr>';
    // COLUMNA
    for ($j = 1; $j <= TAM; $j++) {
        echo '<td>' . $n . '</td>';
        $n += 1; // O $n++
    }
}
echo '</tr>';
echo '</table>';
