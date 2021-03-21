<?php

include "lib/db.php";
class Equipo extends db
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
        $this->realizarConsulta($sql);
    }

    
    # FUNCIÓN ACTUALIZAR
    function actualizarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $sql = "UPDATE equipos SET Ciudad = '" . $ciudad . "', Conferencia = '" . $conferencia . "', Division = '" . $division . "' 
                    WHERE Nombre = '" . $nombre . "'";
        $this->realizarConsulta($sql);
    }

    # FUNCION BORRAR
    function borrarEquipo($nombre)
    {
        if ($this->hayError() == false) {

            $sql = "DELETE FROM equipos WHERE Nombre = '" . $nombre . "'";
            $this->realizarConsulta($sql);
            if (!$this->realizarConsulta($sql)) {
                echo "Falló el borrado del equipo: (" . $this->getConexion()->connect_errno . ")" . $this->getConexion()->error;
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
    function listaConferencias()
    {
        $sql = "SELECT DISTINCT Conferencia FROM equipos ORDER BY Conferencia";
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
    function listaDivisiones()
    {
        $sql = "SELECT DISTINCT Division FROM equipos ORDER BY Division";
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

    function listaEquipos()
    {
        $sql = "SELECT * FROM equipos ORDER BY Nombre";
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