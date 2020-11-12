<?php
    include 'lib/db.php';

# La clase va a heredar de db.php
class Nba extends BBDD
{

    // Constructor que heredará propiedades de la clase padre //
    function __construct()
    {
      parent::__construct();
    }


    // Función que devuelve la lista de los equipos //
    # Ver explicación de los mismos pasos en la función devolverJugadoresPorEquipo
    public function listaEquipos()
    {
        $sql = "SELECT Nombre FROM equipos ORDER BY Nombre ASC";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            $array = [];
            while ($fila = $resultado->fetch_assoc()) {
                $array [] = $fila;
            }
            return $array;
        } else {
            return null;
        }
    }


    // Función que devuelve los datos de los jugadores de un equipo seleccionado //
    public function devolverJugadoresPorEquipo($equipo)
    {
        # 1º - Consulta, usa el parámetro obtenido para completar la consulta
        $sql = "SELECT Nombre, Procedencia, Altura, Peso, Posicion FROM jugadores
                WHERE Nombre_equipo = '" . $equipo . "' ORDER BY Nombre ASC";

        # 2º - Creación de la variable $resultado donde se almacenará el método que hace la consulta (db.php)
        $resultado = $this->realizarConsulta($sql);
        # 3º -  Si el resultado no devuelve valores null (vacíos) se prosigue
        if ($resultado != null) {
            # 4º -  Creación de un array donde irán los valores
            $array = [];
            # 5º -  Se recorre con while los datos obtenidos con un array asociativo
            # Para las filas del array asociativo, cada campo de la consulta es una clave y su valor es el registro obtenido
            while ($fila = $resultado->fetch_assoc()) {
                # 6º -  En cada posición del array se almacena el dato de la fila asociativa obtenido con fetch_assoc
                $array[] = $fila;
            }
            return $array;
        } else {
            return null;
        }
    }


    // Función que devuelve la información de los partidos jugados por cada equipo. Local y visitante //
    public function devolverPartidosPorEquipo($equipo)
    {
        # 1º Consulta
        $sql = "SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante, temporada FROM partidos
                WHERE equipo_local = '" . $equipo . "' OR equipo_visitante = '" . $equipo . "' ORDER BY temporada ASC";

        # 2º - Resultado
        $resultado = $this->realizarConsulta($sql);

        # 3º - Comprobación
        if ($resultado != null) {

            # 4º - Array
            $array = [];

            # 5º - While
            while ($fila = $resultado->fetch_assoc()) {
                # 6º - Filas a array
                $array [] = $fila;
            }
            return $array;
        } else {
            return null;
        }
    }


    // Función que devuelve las temporadas //
    # Funcionamiento exactamente igual que los métodos anteriores
    public function obtenerTemporadas()
    {
        $arrayTemporadas = [];
        $sql = "SELECT DISTINCT temporada FROM estadisticas ORDER BY temporada";
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != null) {
            while ($fila = $resultado->fetch_assoc()) {
                # Como sólo queremos el registro que pertenece a las temporadas, se indica en el campo de $fila
                $arrayTemporadas [] = $fila['temporada'];
            }
            return $arrayTemporadas;
        } else {
            return null;
        }
    }


    // Función para mostrar los máximos anotadores //
    public function devolverMaxAnotadores()
    {
        # 1º - Array que contendrá todos los jugadores anotadores de puntos
        $arrayAnotadores = [];

        # 2º - Array que contendrá las temporadas para recorrelas y buscar los datos
        $arrayTemporadas = $this->obtenerTemporadas();

        if ($arrayTemporadas != null) {

            # 3º - Se recorre el array de las temporadas para obtener la información
            for ($i=0; $i < count($arrayTemporadas); $i++) { 

                # 4º -  Consulta SQL que necesitamos para recoger los datos
                $sql = "SELECT MAX(e.Puntos_por_partido) AS puntuacion,j.nombre, j.Nombre_equipo
                        FROM estadisticas e, jugadores j WHERE e.temporada ='" . $arrayTemporadas[$i] . "' 
                        AND e.jugador = j.codigo GROUP BY jugador ORDER BY puntuacion DESC LIMIT 1";

                # 5º - La consulta se almacena con su método en esta variable
                $resultado = $this->realizarConsulta($sql);
                if ($resultado != null) {
                    # Se comprueba si el número de registros o filas es mayor que 0 (es decir, hay información)
                    if ($resultado->num_rows > 0) {

                        # 6º - Como anteriormente con $fila, se almacena la información del array asociativo en la variable $anotador
                        $anotador = $resultado->fetch_assoc();

                        # 7º - Se almacena en el array cada valor especificado del array asociativo
                        $arrayAnotadores [] = [$anotador['puntuacion'],
                                               $anotador['nombre'],
                                               $anotador['Nombre_equipo'],
                                               $arrayTemporadas[$i]];
                    }
                }
            }
            return $arrayAnotadores;
        } else {
            return null;
        }
    }

    // Función para devolver máximas asistencias por jugador  //
    public function devolverMaxAsistentes()
    {
        $arrayAsistentes = [];
        $arrayTemporadas = $this->obtenerTemporadas();

        if ($arrayTemporadas != null) {
            for ($i=0; $i < count($arrayTemporadas); $i++) { 
                $sql = "SELECT MAX(e.Asistencias_por_partido) AS asistencias,j.nombre, j.Nombre_equipo
                FROM estadisticas e, jugadores j WHERE e.temporada ='" . $arrayTemporadas[$i] . "' 
                AND e.jugador = j.codigo GROUP BY jugador ORDER BY asistencias DESC LIMIT 1";
                $resultado = $this->realizarConsulta($sql);
                if ($resultado != null) {
                    $asistente = $resultado->fetch_assoc();
                    $arrayAsistentes [] = [$asistente['asistencias'],
                                           $asistente['nombre'],
                                           $asistente['Nombre_equipo'],
                                           $arrayTemporadas[$i]];
                }
            }
            return $arrayAsistentes;
        } else {
            return null;
        }
    }
}
?>