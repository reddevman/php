<?php
    include 'lib/escuela.php';

    class Alumnos extends Escuela
    {
        function __construct()
        {
            parent::__construct();
        }

        public function devolverAlumnos()
        {
            # Construcción de la consulta
            $sql = "SELECT * from alumnos";
            $resultado = $this->hacerConsulta($sql);

            /**
             * Una vez comprobado que el resultado no es null (la consulta es válida según la función
             * hacerConsulta() de la clase principal de la base de datos, escuela). Se procede a crear
             * un array en el cual se introducen todos los valores del array asociativo que devuelve la
             * consulta (fetch_assoc()). Con while recorremos todos los campos hasta que haya valores
             * (devuelva true con cada fila) y en cada posición del array se introduce dichos valores.
             */
            if ($resultado != null) {
                $tabla = [];

                while ($fila = $resultado->fetch_assoc()) {
                    $tabla [] = $fila;
                }
                return $tabla;
            } else {
                return null;
            }
        }

        # Por defecto se establece la edad en 18
        public function insertarAlumno($nombre, $apellidos, $edad=18)
        {
            # Se crea la variable que contiene la sentencia de inserción de un alumno
            $insertarSql = "INSERT INTO alumnos (id,nombre,apellidos,edad) VALUES (NULL, '" . $nombre . "', '" . $apellidos . "',
            " . $edad . ")";
            
            # Asignamos al query la consulta de la conexión que realicemos la variable que contiene la sentencia de sql
            # Imprescindible para que almacene los datos
            $this->conn->query($insertarSql);
        }

        public function actualizarAlumno($id,$nombre,$apellidos,$edad)
        {
            $actualizarSql = "UPDATE alumnos SET nombre = '" . $nombre . "', apellidos = '" . $apellidos . "', edad = " . $edad . "
            WHERE id = " . $id;
            $this->conn->query($actualizarSql);
        }

        public function borrarUsuario($id)
        {
            # Se comprueba antes si no ha habido error ninguno en la conexión con la propiedad $error
            if ($this->error == false) {
                $borradoSql = "DELETE FROM alumnos WHERE id = " . $id;
                if (!$this->conn->query($borradoSql)) {
                    echo "Falló el borrado del usuario: (" . $this->conn->connect_errno . ")" . $this->conn->error;
                    return false;
                }
                return true;
            } else {
                return false;
            }
        }
    }
