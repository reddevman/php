<?php
    class Escuela 
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "escuela";

        private $mysqli;
        private $error = false;

        function __construct()
        {
            $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
            if ($this->mysqli->connect_errno) {
                $this->error = true;
            }
        }

        public function devolverAlumnos()
        {
            if (!$this->error) {
                $resultado = $this->mysqli->query("SELECT nombre, apellidos, edad FROM alumnos");
                return $resultado;
            } else {
                    return null;
            }
        }
    }

?>