<?php
    require 'vehiculo.php';
    require 'cuatro_ruedas.php';
    require 'coche.php';
    require 'camion.php';
    require 'dos_ruedas.php';

    /**
     * Vehículo negro de 1500 kg al que se le añade de peso una persona de 70 kg.
     */
    $vehiculo1 = new Vehiculo('Negro',1500);
    $vehiculo1->circula();
    $vehiculo1->anyadir_persona(70);
    echo '<br>';
    echo 'El peso nuevo del vehículo es de ' . $vehiculo1->getPeso() . ' kg.';
    echo '<br>';
    echo '<br>';

    /**
     * Nuevo vehículo verde y de 1400 kg como pide el ejercicio
     */
    $vehiculo2 = new Vehiculo('Verde',1400);
    $persona1 = 65;
    $persona2 = 65;
    $vehiculo2->anyadir_persona($persona1+$persona2);
    echo ' El color del Vehículo 2 es ' . $vehiculo2->getColor() . ' y pesa ' . 
    $vehiculo2->getPeso() . ' kg';
    echo '<br>';
    echo '<br>';

    /**
     * Pruebas con cuatro_ruedas (hereda las propiedades de coche y de su constructor)
     */
    $vehiculoCuatroRuedas = new Cuatro_ruedas('Amarillo',1200);
    $vehiculoCuatroRuedas->repintar('Rojo');
    echo 'Ahora el color del vehículo de cuatro ruedas es ' . $vehiculoCuatroRuedas->getColor() . '.';
    echo '<br>';

    /**
     * Pruebas con coche (hereda propiedades de cuatro_ruedas y de vehiculo)
     */
    $coche1 = new Coche('Azul',1600);
    $coche1->anyadir_cadenas_nieve(2);
    echo '<br>';
    echo 'Ahora el coche tiene ' . $coche1->getNumero_cadenas_nieve() . ' cadenas de nieve puestas.';
    echo '<br>';
    $coche1->anyadir_cadenas_nieve(2);
    // No va a dejar poner más cadenas porque el máximo por coche es de 4 ruedas, 4 cadenas
    $coche1->anyadir_cadenas_nieve(2);

    /**
     * Pruebas con 2 ruedas
     */
     $dosRuedas = new Dos_ruedas('Celeste',1000);
     $dosRuedas->poner_gasolina(15);
     echo 'El peso del vehículo de dos ruedas es ahora de ' . $dosRuedas->getPeso() . ' kg.';
     echo '<br>';

     /**
      * Pruebas con camion
      */
      $camion1 = new Camion('Blanco',900);
      $camion1->setLongitud(5);
      $camion1->anyadir_remolque(2);
      echo 'La longitud ahora es de ' . $camion1->getLongitud() . ' metros.';

?>
