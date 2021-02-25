<?php

require_once 'clubbasket.php';

$request_method = $_SERVER['REQUEST METHOD'];

if ($request_method == 'GET') {
    if (isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador'])) {
        $jugador = new clubbasket();
        $resultado = $jugador->buscarJugador($_GET['nombreJugador']);
        $datos_decode = json_decode($resultado, true);

echo <<< _END
<h1>Datos del Jugador:</h1>
<b>Nombre: {$datos_decode['nombreJugador']}</b>
<b>Posición: {$datos_decode['posicion']}</b>
<b>Número: {$datos_decode['numero']}</b>
<b>Edad: {$datos_decode['edad']}</b>
_END;

    } else {
        echo "<p>Error, no se han especificado los parámetros</p>";
    }
} elseif ($request_method == 'PUT') {
    if (isset($_GET['id']) && !is_null($_GET['id']) &&
        isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador']) &&
        isset($_GET['posicion']) && !is_null($_GET['posicion']) &&
        isset($_GET['numero']) && !is_null($_GET['numero']) &&
        isset($_GET['edad']) && !is_null($_GET['edad'])) {
            $jugador = new clubbasket();

            $arrayJson = array ('id'=> $_GET['id'], 'nombreJugador'=> $_GET['nombreJugador'],
                                'posicion'=> 
            )

            $resultado = $jugador->actualizarJugador();
        }
}

?>