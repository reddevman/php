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
)
*/    

$academia = array (
    array (1,14,8,3),
    array (6,19,7,2),
    array (3,13,4,1)
);

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
foreach ($academia as $niveles) {
    foreach ($niveles as $idiomas) {
        echo 'Los alumnos por niveles e idiomas son los siguientes ' . $idiomas . '<br>';
    }
}
*/
?>