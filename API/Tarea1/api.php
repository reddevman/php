<?php

require_once 'clubbasket.php';

$request_method = $_SERVER['REQUEST_METHOD'];


switch ($request_method) {

        # GET METHOD
    case 'GET':
        /**
         * 1º Comprobación de los GET recibidos por el formulario.
         * 2º Creación del objeto para luego hacer la llamada al método que tiene de parámetro el nombre que buscamos.
         * 3º Como el método devuelve un json codificado debemos descodificarlo, TRUE para recogerlo
         * asociativo.
         * 4º Mostramos la información.
         */
        if (isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador'])) {
            $jugador = new clubbasket();
            $resultado = $jugador->buscarJugador($_GET['nombreJugador']);
            
            if ($resultado != null) {

                $datos_decode = json_decode($resultado, true);

                // Uso de heredoc
                echo <<< _END
<h1>Datos del Jugador:</h1>
<b>Nombre:</b> {$datos_decode['nombreJugador']}<br>
<b>Posición:</b> {$datos_decode['posicion']}<br>
<b>Número:</b> {$datos_decode['numero']}<br>
<b>Edad:</b> {$datos_decode['edad']}<br>
_END;
            } else {
                echo "Error en la búsqueda del jugador";
            }
        } else {
            echo "<p>Error, no se han especificado los parámetros</p>";
        }
        break;

        # PUT METHOD
    case 'PUT':
        /**
         * 1º Comprobación de los GET recibidos por el formulario.
         * 2º Creación del objeto que recogerá la consulta para la actualización de la base de datos.
         * 3º Creamos un array asociativo clave/valor, la clave debe ser la misma que la del json o la
         * base de datos y el valor será lo recogido por los GET.
         * 4º Codificamos el array asociativo en un json ya que eso es lo que debe recoger la función de UPDATE/PUT
         * 5º Se hace la llamada al método con parámetro el array ya codificado en json.
         */
        if (
            isset($_GET['id']) && !is_null($_GET['id']) &&
            isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador']) &&
            isset($_GET['posicion']) && !is_null($_GET['posicion']) &&
            isset($_GET['numero']) && !is_null($_GET['numero']) &&
            isset($_GET['edad']) && !is_null($_GET['edad'])
        ) {
            $jugador = new clubbasket();

            $arrayJson = array(
                'id' => $_GET['id'], 'nombreJugador' => $_GET['nombreJugador'],
                'posicion' => $_GET['posicion'], 'numero' => $_GET['numero'], 'edad' => $_GET['edad']
            );
            $datos_encode = json_encode($arrayJson);
            $jugador->actualizarJugador($datos_encode);
            echo "<h1>Se han actualizado los datos del jugador.</h1>";
        } else {
            echo "<p>Error, no se han especificado los parámetros.</p>";
        }
        break;

    default:
        echo "Error en la ejecución de la API";
        break;
}

// if ($request_method == 'GET') {
//     if (isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador'])) {
//         $jugador = new clubbasket();
//         $resultado = $jugador->buscarJugador($_GET['nombreJugador']);
//         $datos_decode = json_decode($resultado, true);

//         echo <<< _END
// <h1>Datos del Jugador:</h1>
// <b>Nombre:</b> {$datos_decode['nombreJugador']}<br>
// <b>Posición:</b> {$datos_decode['posicion']}<br>
// <b>Número:</b> {$datos_decode['numero']}<br>
// <b>Edad:</b> {$datos_decode['edad']}<br>
// _END;
//     } else {
//         echo "<p>Error, no se han especificado los parámetros</p>";
//     }
// } elseif ($request_method == 'PUT') {
//     if (
//         isset($_GET['id']) && !is_null($_GET['id']) &&
//         isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador']) &&
//         isset($_GET['posicion']) && !is_null($_GET['posicion']) &&
//         isset($_GET['numero']) && !is_null($_GET['numero']) &&
//         isset($_GET['edad']) && !is_null($_GET['edad'])
//     ) {
//         $jugador = new clubbasket();

//         $arrayJson = array(
//             'id' => $_GET['id'], 'nombreJugador' => $_GET['nombreJugador'],
//             'posicion' => $_GET['posicion'], 'numero' => $_GET['numero'], 'edad' => $_GET['edad']
//         );
//         $datos_encode = json_encode($arrayJson);
//         $jugador->actualizarJugador($datos_encode);
//         echo "<h1>Se han actualizado los datos del jugador.</h1>";
//     } else {
//         echo "<p>Error, no se han especificado los parámetros</p>";
//     }
// }
