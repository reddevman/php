<?php
    class Escuela 
    {
        # Creación de variables para cada parámetro de la conexión SQL
        private $host = "localhost";
        private $user = "root";
        private $pass = "112812";
        private $db_name = "escuela";

        # Propiedad mysqli que tendrá la conexión a la base de datos
        private $conn;
        # Variable de error si la conexión no se hiciera efectiva
        private $error = false;

        function __construct()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
            if ($this->conn->connect_errno) {
                $this->error = true;
            }
        }

        # Función que devuelve la consulta a una variable para usar en otro archivo php
        public function devolverAlumnos()
        {
            if (!$this->error) {
                $resultado = $this->conn->query("SELECT nombre, apellidos, edad FROM alumnos");
                return $resultado;

            } else { # Se usa el valor null para luego reutilizarlo como comprobación en el while de mostrar la consulta
                    return null;
            }
        }

        public function insertarAlumno($nombre, $apellidos, $edad)
        {
            # Se crea la variable que contiene la sentencia de inserción de un alumno
            $insertarSql = "INSERT INTO alumnos (id,nombre,apellidos,edad) VALUES (NULL, '" . $nombre . "', '" . $apellidos . "',
            " . $edad . ")";
            
            # Asignamos al query la consulta de la conexión que realicemos la variable que contiene la sentencia de sql
            # Imprescindible para que almacene los datos
            $this->conn->query($insertarSql);
        }
    }
?>