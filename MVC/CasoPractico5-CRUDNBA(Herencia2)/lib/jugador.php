<?php

include "lib/db.php";
class Jugador extends db
{
    private $nombre;

    function __construct()
    {
      parent::__construct();
    }

    # FUNCIÓN INSERTAR
    function insertarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $sql = "INSERT INTO equipos (Nombre,Ciudad,Conferencia,Division) VALUES
                ('" . $nombre . "','" . $ciudad . "','" . $conferencia . "','" . $division . "')";
        $this->getConexion()->query($sql);
    }

    
    # FUNCIÓN ACTUALIZAR
    function actualizarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $sql = "UPDATE equipos SET Ciudad = '" . $ciudad . "', Conferencia = '" . $conferencia . "', Division = '" . $division . "' 
                    WHERE Nombre = '" . $nombre . "'";
        $this->conexion->query($sql);
    }

    # FUNCION BORRAR
    function borrarEquipo($nombre)
    {
        if ($this->hayError() == false) {

            $sql = "DELETE FROM equipos WHERE Nombre = '" . $nombre . "'";
            if (!$this->conexion->query($sql)) {
                echo "Falló el borrado del equipo: (" . $this->conexion->connect_errno . ")" . $this->conexion->error;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    # FUNCION MOSTRAR EQUIPO INSERTADO
    function mostrarEquipo($nombre)
    {
        $sql = "SELECT * FROM equipos WHERE Nombre = '" . $nombre . "'";
        $resultado = $this->realizarConsulta($sql);
        $arrayEquipo = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayEquipo[] = $fila;
            }
            return $arrayEquipo;
        } else {
            return null;
        }
    }

    # Función que devuelve un array con las conferencias para el option en HTML
    function listaPosiciones()
    {
        $sql = "SELECT DISTINCT Posicion FROM jugadores ORDER BY Posicion";
        $resultado = $this->realizarConsulta($sql);
        $arrayConferencias = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayConferencias[] = $fila;
            }
            return $arrayConferencias;
        } else {
            return null;
        }

    }
    # Función que devuelve un array con las divisiones para el option en HTML
    function listaNombreEquipos()
    {
        $sql = "SELECT DISTINCT Nombre_equipo FROM jugadores ORDER BY Nombre_equipo";
        $resultado = $this->realizarConsulta($sql);
        $arrayDivision = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayDivision[] = $fila;
            }
            return $arrayDivision;
        } else {
            return null;
        }
    }

    function listaJugadores()
    {
        $sql = "SELECT * FROM jugadores ORDER BY Nombre";
        $resultado = $this->realizarConsulta($sql);
        $arrayDivision = [];

        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                $arrayDivision[] = $fila;
            }
            return $arrayDivision;
        } else {
            return null;
        }
    }
    }
?>