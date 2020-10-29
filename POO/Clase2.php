<?php
    include 'Clase.php';
    $coche1 = new Coche();
    // getColor podríamos asignarlo a una variable
    $coche1->getColor();
    
    $coche1->getTipo();
    $coche1->mostrarColor();

    // Da error porque es una propiedad privada
    // $coche1->color;

?>