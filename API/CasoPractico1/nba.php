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
    public function buscarEquipo($equipo)
    {

        $sql = "SELECT * FROM equipos WHERE Nombre = '" . $equipo . "'";

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
    function insertarEquipo($jsonEquipo)
    {
        $arrayDatosEquipo = json_decode($jsonEquipo, true);
        $sql = "INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division) VALUES
                    ('" . $arrayDatosEquipo['Nombre'] . "','" . $arrayDatosEquipo['Ciudad'] . "',
                     '" . $arrayDatosEquipo['Conferencia'] . "','" . $arrayDatosEquipo['Divi    sion'] . "')";
        $resultado = $this->conexion->query($sql);
        if ($resultado != null) {
            return $resultado;
        } else {
            return null;
        }
    }

    # FUNCIÓN ACTUALIZAR DATOS DE UN EQUIPO - PUT
    public function actualizarEquipo($jsonEquipo)
    {
        $arrayDatosEquipo = json_decode($jsonEquipo, true);
        $sql = "UPDATE equipos SET Nombre = '" . $arrayDatosEquipo['Nombre'] . "',
                                       Ciudad = '" . $arrayDatosEquipo['Ciudad'] . "',
                                       Conferencia = '" . $arrayDatosEquipo['Conferencia'] . "',
                                       Division = '" . $arrayDatosEquipo['Division'] . "' WHERE
                                       Nombre = '" . $arrayDatosEquipo['Nombre'] . "'";

        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            return $resultado;
        } else {
            return null;
        }
    }

    # FUNCIÓN BORRAR UN EQUIPO - DELETE
    public function borrarEquipo($jsonEquipo)
    {
        $arrayDatosEquipo = json_decode($jsonEquipo, true);
        $sql = "DELETE FROM equipos WHERE Nombre = '" . $arrayDatosEquipo['Nombre'] . "'";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            return $resultado;
        } else {
            return null;
        }
    }
}
