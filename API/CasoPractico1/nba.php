<?php

require_once 'db.php';

class nba extends db
{

    # HERENCIA CONSTRUCTOR DB
    function __construct()
    {
        parent::__construct();
    }

    ### FUNCIONES CRUD ###

    # FUNCIÓN BUSCAR UN EQUIPO - GET
    public function buscarJugador($equipo)
    {

        $sql = "SELECT * FROM equipos WHERE nombre = '" . $equipo . "'";

        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            $equipo = $resultado->fetch_assoc();
            $json_equipo = json_encode($equipo);
            return $json_equipo;
        } else {
            return null;
        }
    }

    # FUNCIÓN INSERTAR - POST
    function insertarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $sql = "INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division) VALUES
                    ('" . $nombre . "','" . $ciudad . "','" . $conferencia . "','" . $division . "')";
        $resultado = $this->conexion->query($sql);
        if ($resultado != null) {
            return $resultado;
        } else {
            return null;
        }
    }

    # FUNCIÓN ACTUALIZAR DATOS DE UN JUGADOR - PUT
    public function actualizarJugador($jsonJugador)
    {

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

    # FUNCIÓN BORRAR DATOS DE UN JUGADOR - DELETE
    public function borrarJugador($jsonJugador)
    {
        $arrayDatosJugador = json_decode($jsonJugador, true);
        $sql = "DELETE FROM jugador WHERE id = " . $arrayDatosJugador['id'] . "";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            return $resultado;
        } else {
            return null;
        }
    }
}
