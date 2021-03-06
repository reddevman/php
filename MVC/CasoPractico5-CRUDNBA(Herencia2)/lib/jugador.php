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
    function insertarJugador($nombre, $procedencia, $altura, $peso, $posicion, $equipo)
    {
        //$codigo = (int) $this->getConexion()->query("SELECT MAX(codigo) FROM jugadores");
        $codigo = (int) $this->realizarConsulta("SELECT MAX(codigo) FROM jugadores");
        $codigoFinal = $codigo + 1;
        $sql = "INSERT INTO jugadores (codigo, Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) VALUES
                ($codigoFinal, '" . $nombre . "','" . $procedencia . "','" . $altura . "','" . $peso . "','" . $posicion . "','" . $equipo . "')";
        $this->realizarConsulta($sql);
    }

    
    # FUNCIÓN ACTUALIZAR
    function actualizarJugador($nombre, $procedencia, $altura, $peso, $posicion, $equipo)
    {
        $codigo = $this->realizarConsulta("SELECT MAX(codigo) FROM jugadores WHERE nombre = '" . $nombre . "'");

        $sql = "UPDATE equipos SET codigo = '" . $codigo . "', Procedencia = '" . $procedencia . "', Altura = '" . $altura . "', Peso = '" . $peso . "',
                Posicion = '" . $posicion . "', Nombre_equipo = '" . $equipo . "' WHERE Nombre = '" . $nombre . "'";
        $this->realizarConsulta($sql);
    }

    # FUNCION BORRAR
    function borrarJugador($nombre)
    {
        if ($this->hayError() == false) {

            $sql = "DELETE FROM jugadores WHERE Nombre = '" . $nombre . "'";
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
    function mostrarJugador($nombre)
    {
        $sql = "SELECT * FROM jugadores WHERE Nombre = '" . $nombre . "'";
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

    # Función que devuelve un array con las posiciones para el option en HTML
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
    # Función que devuelve un array con los equipos para el option en HTML
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

    # Función que devuelve una lista con los jugadores
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