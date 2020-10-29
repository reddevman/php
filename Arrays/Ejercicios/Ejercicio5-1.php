<?php

/* array 3*4 (asociativo)
array ( 
    'basico'  => array (
        'inglés' => 1
        'francés' => 14
        'alemán' => 8
        'ruso' => 3
    )
    'medio' => array (
        inglés' => 6
        'francés' => 19
        'alemán' => 7
        'ruso' => 2
    )
    'perfeccionamiento' => array (
    inglés' => 3
    'francés' => 13
    'alemán' => 4
    'ruso' => 1
    )    
) */

$academia [0][0] = 1;
$academia [0][1] = 14;
$academia [0][2] = 8;
$academia [0][3] = 3;

$academia [1][0] = 6;
$academia [1][1] = 19;
$academia [1][2] = 7;
$academia [1][3] = 2;

$academia [2][0] = 3;
$academia [2][1] = 13;
$academia [2][2] = 4;
$academia [2][3] = 1;

$basico = 0;
for ($columna=0; $columna < 4; $columna++) { 
    $basico += $academia[0][$columna];
}

$medio = 0;
for ($columna=0; $columna < 4; $columna++) { 
    $medio += $academia[1][$columna];
}

$perfeccionamiento = 0;
for ($columna=0; $columna < 4; $columna++) { 
    $perfeccionamiento += $academia[2][$columna];
}

$ingles = 0;
for ($filas=0; $filas < 3; $filas++) { 
    $ingles += $academia[$filas][0];
}

$frances = 0;
for ($filas=0; $filas < 3; $filas++) { 
    $frances += $academia[$filas][1];
}

$aleman = 0;
for ($filas=0; $filas < 3; $filas++) { 
    $aleman += $academia[$filas][2];
}

$ruso = 0;
for ($filas=0; $filas < 3; $filas++) { 
    $ruso += $academia[$filas][3];
}


echo '<h2>Número de alumnos por nivel</h2>';
echo 'Básico: ' . $basico . '<br>';
echo 'Medio: ' . $medio . '<br>';
echo 'Perfeccionamiento: ' . $perfeccionamiento . '<br>';

echo '<h2>Número de alumnos por idioma</h2>';
echo 'Inglés: ' . $ingles . '<br>';
echo 'Francés: ' . $frances . '<br>';
echo 'Alemán: ' . $aleman . '<br>';
echo 'Ruso: ' . $ruso . '<br>';


/*
echo 'Para el nivel básico e inglés hay ' . $academia [0][0] . ' alumno/s <br>';
echo 'Para el nivel básico e francés hay ' . $academia [0][1] . ' alumno/s <br>';
echo 'Para el nivel básico e alemán hay ' . $academia [0][2] . ' alumno/s <br>';
echo 'Para el nivel básico e ruso hay ' . $academia [0][3] . ' alumno/s <br>';
echo '<hr>';

echo 'Para el nivel medio e inglés hay ' . $academia [1][0] . ' alumno/s <br>';
echo 'Para el nivel medio e francés hay ' . $academia [1][1] . ' alumno/s <br>';
echo 'Para el nivel medio e alemán hay ' . $academia [1][2] . ' alumno/s <br>';
echo 'Para el nivel medio e ruso hay ' . $academia [1][3] . ' alumno/s <br>';
echo '<hr>';


echo 'Para el nivel perfeccionamiento e inglés hay ' . $academia [2][0] . ' alumno/s <br>';
echo 'Para el nivel perfeccionamiento e francés hay ' . $academia [2][1] . ' alumno/s <br>';
echo 'Para el nivel perfeccionamiento e alemán hay ' . $academia [2][2] . ' alumno/s <br>';
echo 'Para el nivel perfeccionamiento e ruso hay ' . $academia [2][3] . ' alumno/s';
*/



?>