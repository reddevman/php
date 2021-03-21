<?php

require_once 'nba.php';

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
        if (isset($_GET['Nombre']) && !is_null($_GET['Nombre'])) {
            $jugador = new nba();
            $resultado = $jugador->buscarEquipo($_GET['Nombre']);

            if ($resultado != null) {

                $datos_decode = json_decode($resultado, true);

                // Uso de heredoc
                echo <<< _END
<h1>Datos del Equipo:</h1>
<b>Nombre:</b> {$datos_decode['Nombre']}<br>
<b>Ciudad:</b> {$datos_decode['Ciudad']}<br>
<b>Conferencia:</b> {$datos_decode['Conferencia']}<br>
<b>División:</b> {$datos_decode['Division']}<br>
_END;
            } else {
                echo "Error en la búsqueda del equipo";
            }
        } else {
            echo "<p>Error, no se han especificado el Nombre del equipo a buscar</p>";
        }
        break;

        # POST METHOD
    case 'POST':
        /**
         * 1º Comprobación de los GET recibidos por el formulario.
         * 2º Creación del objeto que recogerá la consulta para la actualización de la base de datos.
         * 3º Creamos un array asociativo clave/valor, la clave debe ser la misma que la del json o la
         * base de datos y el valor será lo recogido por los GET.
         * 4º Codificamos el array asociativo en un json ya que eso es lo que debe recoger la función de UPDATE/PUT
         * 5º Se hace la llamada al método con parámetro el array ya codificado en json.
         */
        if (
            isset($_POST['Nombre']) && !is_null($_POST['Nombre']) &&
            isset($_POST['Ciudad']) && !is_null($_POST['Ciudad']) &&
            isset($_POST['Conferencia']) && !is_null($_POST['Conferencia']) &&
            isset($_POST['Division']) && !is_null($_POST['Division'])
        ) {
            $jugador = new nba();

            $arrayJson = array(
                'Nombre' => $_POST['Nombre'], 'Ciudad' => $_POST['Ciudad'],
                'Conferencia' => $_POST['Conferencia'], 'Division' => $_POST['Division']);
            $datos_encode = json_encode($arrayJson);
            $jugador->insertarEquipo($datos_encode);

            echo "<h1>Se han insertado los datos del equipo " . $_POST['Nombre'] . ".</h1>";
            $resultado = $jugador->buscarEquipo($_POST['Nombre']);
            $datos_decode = json_decode($resultado, true);

                // Uso de heredoc
                echo <<< _END
<h1>Datos del Equipo:</h1>
<b>Nombre:</b> {$datos_decode['Nombre']}<br>
<b>Ciudad:</b> {$datos_decode['Ciudad']}<br>
<b>Conferencia:</b> {$datos_decode['Conferencia']}<br>
<b>División:</b> {$datos_decode['Division']}<br>
_END;

        } else {
            echo "<p>Error, no se han especificado los parámetros necesarios (Nombre, Ciudad,
                     Conferencia y Division).</p>";
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
            isset($_GET['Nombre']) && !is_null($_GET['Nombre']) &&
            isset($_GET['Ciudad']) && !is_null($_GET['Ciudad']) &&
            isset($_GET['Conferencia']) && !is_null($_GET['Conferencia']) &&
            isset($_GET['Division']) && !is_null($_GET['Division'])
        ) {
            $jugador = new nba();

            $arrayJson = array(
                'Nombre' => $_GET['Nombre'], 'Ciudad' => $_GET['Ciudad'],
                'Conferencia' => $_GET['Conferencia'], 'Division' => $_GET['Division']);
            $datos_encode = json_encode($arrayJson);
            $jugador->actualizarEquipo($datos_encode);
            echo "<h1>Se han actualizado los datos del equipo " . $_GET['Nombre'] . "</h1>";
        } else {
            echo "<p>Error, no se han especificado los parámetros necesarios
                     (Nombre de equipo -> datos a modificar = Ciudad,
                     Conferencia y Division).</p>";
        }
        break;

        # DELETE METHOD
    case 'DELETE':

        /**
         * 1º $_GET
         * 2º Objeto
         * 3º Array asociativo
         * 4º Codificación de array asociativo
         * 5º Consulta sql
         */
        if (isset($_GET['Nombre']) && !is_null($_GET['Nombre'])) {
            $jugador = new nba();
            $arrayJson = array('Nombre' => $_GET['Nombre']);
            var_dump($arrayJson);
            echo "<br>";
            $datos_encode = json_encode($arrayJson);
            var_dump($datos_encode);
            $resultado = $jugador->borrarEquipo($datos_encode);

            if ($resultado != null) {
                echo "<p>Se ha borrado correctamente el equipo con el nombre: <b>" . $_GET['Nombre'] . "</b></p>";
            } else {
                echo "<p>Hubo un error en el borrado del equipo.</p>";
            }
        } else {
            echo "<p>Error, no se han especificado el Nombre del equipo a borrar</p>";
        }
        break;

    default:
        echo "Error en la ejecución de la API";
        break;
}