<?php
$academia = array ( 
    'basico'  => array (
        0 => 1,
        1 => 14,
        2 => 8,
        3 => 3
    ),
    'medio' => array (
        0 => 6,
        1 => 19,
        2 => 7,
        3 => 2
    ),
    'perfeccionamiento' => array (
        0 => 3,
        1 => 13,
        2 => 4,
        3 => 1
    )
);

/*
// Uno a uno
echo 'Para el nivel básico e inglés la cantidad de alumnos es ' . $academia ['basico'][0] . ' alumno/s <br>';
echo 'Para el nivel básico e francés la cantidad de alumnos es ' . $academia ['basico'][1] . ' alumno/s <br>';
echo 'Para el nivel básico e alemán la cantidad de alumnos es ' . $academia ['basico'][2] . ' alumno/s <br>';
echo 'Para el nivel básico e ruso la cantidad de alumnos es ' . $academia ['basico'][3] . ' alumno/s <br>';
echo '<hr>';

echo 'Para el nivel medio e inglés la cantidad de alumnos es ' . $academia ['medio'][0] . ' alumno/s <br>';
echo 'Para el nivel medio e francés la cantidad de alumnos es ' . $academia ['medio'][1] . ' alumno/s <br>';
echo 'Para el nivel medio e alemán la cantidad de alumnos es ' . $academia ['medio'][2] . ' alumno/s <br>';
echo 'Para el nivel medio e ruso la cantidad de alumnos es ' . $academia ['medio'][3] . ' alumno/s <br>';
echo '<hr>';

echo 'Para el nivel perfeccionamiento e inglés la cantidad de alumnos es ' . $academia ['perfeccionamiento'][0] . ' alumno/s <br>';
echo 'Para el nivel perfeccionamiento e francés la cantidad de alumnos es ' . $academia ['perfeccionamiento'][1] . ' alumno/s <br>';
echo 'Para el nivel perfeccionamiento e alemán la cantidad de alumnos es ' . $academia ['perfeccionamiento'][2] . ' alumno/s <br>';
echo 'Para el nivel perfeccionamiento e ruso la cantidad de alumnos es ' . $academia ['perfeccionamiento'][3] . ' alumno/s <br>';
echo '<hr>';

// Usando bucle for
foreach ($academia as $niveles) {
    foreach ($niveles as $idiomas) {
        echo 'Los alumnos para el nivel e idiomas son los siguientes ' . $idiomas . '<br>';
    }
}
*/

?>