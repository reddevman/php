<?php

$miArray = [];

$numero = 3;

for ($i=0; $i < 6; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $miArray[$i][$j] = $numero;
        $numero += 3;
    }
}

?>