<?php

    $miArray = array ();
    $miArray [0]['casa'] = 'Pepe';
    $longitud = count ($miArray);

    for ($i=0; $i < $longitud; $i++) {
        // Medimos la longitud de la primera dimensión del Array
        $longitud2 = count ($miArray[$i]);

        // Recorremos la segunda dimensión con la longitud ya definida
        for ($j=0; $j < $longitud2; $j++) { 
            echo $miArray [$i]['casa'];
        }
    }

?>