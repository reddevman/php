<?php
/*Escriba un programa que muestre una tirada de dado al azar y escriba en letras el valor obtenido.
 (Usar rand(veces, num_max)).*/

// Generamos lo que será un número aleatorio del 1 al 6
$aleatorio = rand(1,6);

/*
HACIENDO COMO SI FUERA UN DADO CON CARAS ALEATORIAS
// Generamos un array vacío
$dado = array ();

// Con los for, primero entramos en las 6 caras del dado
for ($i=0; $i < 6; $i++) {  

    // Con el segundo for en cada cara introducimos un número aleatorio (1 al 6)
    for ($j=0; $j < 6; $j++) { 
        $dado [$i][$j] = $aleatorio;
    }
}
*/

// Mediante el switch "traducimos" el número que salga a letras o cadenas
    switch ($aleatorio) {
        case 1:
            echo 'El valor obtenido es UNO';
            break;
        case 2:
            echo 'El valor obtenido es DOS';
            break;
        case 3:
            echo 'El valor obtenido es TRES';
            break;
        case 4:
            echo 'El valor obtenido es CUATRO';
            break;
        case 5:
            echo 'El valor obtenido es CINCO';
            break;
        case 6:
            echo 'El valor obtenido es SEIS';
            break;    
    }

// Opción haciendo el ejercicio con array asociativo
$dado = [1=>'Uno', 2=>'Dos', 3=>'Tres', 4=>'Cuatro', 5=>'Cinco', 6=>'Seis'];
echo '<br>El valor obtenido es ' . $dado[$aleatorio];

?>