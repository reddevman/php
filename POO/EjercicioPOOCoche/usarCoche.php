<?php
    require 'coche.php';
    /*
    Se crea una nueva instancia de coche con:
    - Diesel, 40 de combustible, 0 km/h de velocidad, con un depósito de 50l
    y con 10l de reserva -
     */
    $coche1 = new Coche('Diesel',40,0,50,10);
    // Variable $estado que se modificará con cada arranque o parada
    $estado = $coche1->getEstado();
    $combustible = $coche1->getTipoCombustible();
    echo 'El coche usa combustible: ' . $combustible;
    echo '<hr>';
    // Arrancamos el coche
    $coche1->arrancar();
    //$estado = true;

    echo $coche1->comprobarReserva();
    echo '<hr>';

    $velocidadActual = $coche1->acelerar(40);
    echo 'La velocidad, después de <b>acelerar</b>, es de ' . $velocidadActual . ' km/h <br>';
    $velocidadActual = $coche1->frenar(10);
    echo 'La velocidad, después de <b>frenar</b>, es de ' . $velocidadActual . ' km/h';

    $coche1->comprobarEstado();
    $velocidadActual = $coche1->frenar(30);
    echo 'La velocidad es ahora de ' . $velocidadActual . ' km/h';

    $coche1->comprobarEstado();

    // Descomentar para ver cambios según el estado del vehículo
    //$estado = false;

    if ($estado == false) {
        $repostar = $coche1->repostaje(10);
        echo 'Se ha repostado, ahora se tiene ' . $repostar . ' litros de combustible. <br>';
    } else echo 'El coche no está parado, hazlo antes de poder repostar.';

?>