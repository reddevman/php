<?php
    require_once 'db.php';

    class clubbasket extends db {

        # HERENCIA CONSTRUCTOR DB
        function __construct()
        {
            parent::__construct();
        }

        ### FUNCIONES CRUD

        # FUNCIÓN BUSCAR UN JUGADOR
        public function buscarJugador($jugador) {

        /**
         * 1º Creamos la consulta sql
         * 2º La recibimos en una variable $resultado mediante el método de la clase db
         * 3º Recogemos esa fila del resultado de la base de datos en la variable $jugador
         * 4º Codificamos en otra variable los datos obtenidos mediante la función json_encode
         * 5º Se devuelve esa variable con el contenido del json
         */
            $sql = "SELECT * FROM jugador WHERE nombreJugador = '" . $jugador . "'";

            $resultado = $this->realizarConsulta($sql);
            if ($resultado != null) {
                $jugador = $resultado->fetch_assoc();
                $json_jugador = json_encode($jugador);
                return $json_jugador;
            } else {
                return null;
            }
        }

        # FUNCIÓN ACTUALIZAR DATOS DE UN JUGADOR
        public function actualizarJugador($jsonJugador){
            
            /**
             * 1º Se recibe de una aplicación, el json como parámetro
             * 2º Se decodifica la información del json y se recoge en una variable
             * 2º (b) Como queremos almacenarlo en un array asociativo, se debe poner el parámetro TRUE en el decode
             * 3º Se crea la sentencia sql y se realiza la consulta mediante el método de db
             * 3º (b) Se hace el update donde el id es el que se indique en la parte de la API
             * 4º Se devuelve el resultado si la consulta no es null
             */
            $arrayDatosJugador = json_decode($jsonJugador, true);
            $sql = "UPDATE jugador SET nombreJugador = '" . $arrayDatosJugador['nombreJugador'] . "',
                                       posicion = '" . $arrayDatosJugador['posicion'] . "',
                                       numero = " . $arrayDatosJugador['numero'] . ",
                                       edad = " . $arrayDatosJugador['edad'] . " WHERE
                                       id = " . $arrayDatosJugador['id'] . "";

            $resultado = $this->realizarConsulta($sql);
            if ($resultado != null) {
                return $resultado;
            } else {
                return null;
            }
        }   
    }
