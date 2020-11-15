<?php
    include 'lib/dbNBA.php';
    class Nba extends BBDD
    {
        function __construct()
        {
            parent::__construct();
        }

        function listaEquipos()
        {
            $sql = "SELECT Nombre from equipos ORDER BY Nombre ASC";
            $resultado = $this->realizarConsulta($sql);
            $arrayEquipos = [];

            if ($resultado != null) {
                while ($fila = $resultado->fetch_assoc()) {
                    $arrayEquipos [] = $fila;
                }
                return $arrayEquipos;
            } else {
                return null;
            }
        }

        function listaTemporadas()
        {
            $sql = "SELECT DISTINCT temporada FROM partidos ORDER BY temporada";
            $resultado = $this->realizarConsulta($sql);
            $arrayTemporadas = [];

            if ($resultado != null) {
                while ($fila = $resultado->fetch_assoc()) {
                    $arrayTemporadas [] = $fila;
                }
                return $arrayTemporadas;
            } else {
                return null;
            }
        }

        function filtrar($equipoLocal, $equipoVisitante, $temporada)
        {
            $sql = "SELECT equipo_local, puntos_local, equipo_visitante, puntos_visitante, temporada FROM partidos
                    WHERE equipo_local = \".$equipoLocal.\"AND equipo_visitante = \".$equipoVisitante.\" AND temporada = \".$temporada";
            $resultado = $this->realizarConsulta($sql);
            $arrayPartidos = [];

            if ($resultado != null) {
                while ($fila = $resultado->fetch_assoc()) {
                    $arrayPartidos [] = [$fila['equipo_local'],
                                         $fila['puntos_local'],
                                         $fila['equipo_visitante'],
                                         $fila['puntos_visitante'],
                                         $fila['$temporada']];
                }
                return $arrayPartidos;
            } else {
                return null;
            }
    }
}
?>
