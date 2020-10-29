<?php
    // Incluimos el archivo php de la clase principal
    require 'Equipo.php';
    // Se crean los 2 objetos nuevos
    $UNCBasket = new Equipo();
    $RMDBasket = new Equipo();

    // Creamos variables con cadenas que contendrán el nombre del equipo
    $nombre1 = 'UNCBasket';
    $nombre2 = 'RMDBasket';
    
    // Mediante la llamada al método asignamos el nombre a cada objeto
    $UNCBasket->ponerEquipo($nombre1);
    // También se puede asignar el parámetro con la cadena, número, etc que queramos
    // $UNCBasket->ponerEquipo('UNCBasket2');
    $RMDBasket->ponerEquipo($nombre2);

    // Llamamos al método de la clase principal para mostrar la info de cada objeto
    $UNCBasket->mostrarEquipo();
    $RMDBasket->mostrarEquipo();

    

?>