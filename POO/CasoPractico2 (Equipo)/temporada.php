<?php
    require 'jugador.php';
    require 'equipo.php';

    $equipo = new Equipo();

        // Del 1 al 9 para mostrar los dorsales consecutivos (1,2,3,4,5...)
    for ($i=1; $i <=9 ; $i++) {
        /* Se crea una nueva instancia de Jugador para cada posición 
        y se le pasa por parámetro la variable $i para que sean números
        consecutivos */
        $jugador = new Jugador($i);

        # Se le añade al objeto "jugador" los puntos aleatorios
        $jugador->addPtos(rand(20,100));

        /* Añadimos al equipo el jugador creado (del 1 al 9 según el bucle)
         ($jugador ya contiene el objeto con el dorsal y los puntos) */
        $equipo->addJug($jugador);
        echo 'El jugador nº es el siguiente:<br>';
        echo $jugador->infoJug() . '<br>';
    }

    $total = $equipo->getTotal();

    echo 'El total de puntos de todos los jugadores es ' . $total . '.';
?>