<?php
    /** PASOS CREACIÓN ARCHIVO DE CONSULTAS
     * - Herencia del constructor padre
     * - Funciones con las consultas:
     *      - Creación de la sentencia sql en una variable
     *      - Variable resultado que almacenará la consulta mediante el método padre realizarConsulta
     *      - Variable array que contendrá los campos de la consulta
     *      - Bucle while para recorrer la consulta mediante un array asociativo
     *      - Se le asigna a cada posición del array creado antes (y mientras haya datos) cada campo y su correspondiente
     *      registro para luego devolverlo con return una vez finalizada la función
     */

    include 'lib/dbNBA.php';
    class Nba extends BBDD
    {
        function __construct()
        {
            parent::__construct();
        }

        # Función que devuelve un array con los equipos locales para el option en HTML
        function listaEquiposLocales()
        {
            $sql = "SELECT equipo_local from partidos GROUP BY equipo_local";
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

        # Función que devuelve un array con los equipos visitantes para el option en HTML
        function listaEquiposVisitantes()
        {
            $sql = "SELECT equipo_visitante from partidos GROUP BY equipo_visitante";
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

        # Función que devuelve un array con las temporadas para el option en HTML
        function listaTemporadas()
        {
            $sql = "SELECT DISTINCT temporada FROM partidos ORDER BY temporada ASC";
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

        # Función que devuelve en un array la consulta pedida por el ejercicio
        function filtrar($equipoLocal, $equipoVisitante, $temporada)
        {
            $sql = "SELECT equipo_local,puntos_local, equipo_visitante,puntos_visitante,temporada FROM partidos WHERE equipo_local='".$equipoLocal."' 
                    AND equipo_visitante='".$equipoVisitante."' AND temporada='".$temporada."' ";
            $resultado = $this->realizarConsulta($sql);
            /**
             * Si quisieramos que devolviera sólo con return $resultado y prescindir del array,
             * omitiriamos el código de abajo
             */
            if ($resultado != null) {
                $arrayPartidos = [];
                while ($fila = $resultado->fetch_assoc()) {
                    $arrayPartidos [] = $fila;
                }
                return $arrayPartidos;
            } else {
                return null;
            }
        }
}
?>
