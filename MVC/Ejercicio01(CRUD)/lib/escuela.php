<?php
    class Escuela 
    {
        # Creación de variables para cada parámetro de la conexión SQL
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "escuela";

        # Propiedad mysqli que tendrá la conexión a la base de datos
        private $conn;
        # Variable de error si la conexión no se hiciera efectiva
        private $error = false; private $error_msj = "";

        # En el constructor se haya la conexión a la base de datos
        function __construct()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
            if ($this->conn->connect_errno) {
                $this->error = true;
            }
        }

        function getConn()
        {
            return $this->conn;
        }

        # Funciones para saber si hay error y para enviar un mensaje de error
        public function hayError()
        {
            return $this->error;
        }
        public function msjError()
        {
            return $this->error_msj;
        }


        # Función para hacer la consulta a la base de datos
        public function hacerConsulta($consulta)
        {
            if ($this->error == false) {
                $resultado = $this->conn->query($consulta);
                return $resultado;
            } else {

                /* Si falla la consulta se devuelve un null que luego se usará en una comprobación o
                condicional de la clase alumnos */
                $this->error_msj="No se puede hacer la consulta: " . $consulta;
                return null;
            }
        }

        /* # Función que devuelve la consulta a una variable para usar en otro archivo php
        public function devolverAlumnos()
        {
            if ($this->error == false) {
                $resultado = $this->conn->query("SELECT nombre, apellidos, edad FROM alumnos");
                return $resultado;

            } else { # Se usa el valor null para luego reutilizarlo como comprobación en el while de mostrar la consulta
                    return null;
            }
        } */
    }
?>