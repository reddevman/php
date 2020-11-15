<?php

    class dbNBA
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "nba";

        private $conexion;

        private $error = false; private $error_msj = "";

        function __construct()
        {
            $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

            if ($this->conexion->connect_errno) {
                $this->error =  true;
            }
        }

        function hayError()
        {
            return $this->error;
        }

        function msjError()
        {
            return $this->error_msj;
        }

        function realizarConsulta($consulta)
        {
            if (!$this->hayError()) {
                $resultado = $this->conexion->query($consulta);
                return $resultado;
            } else {
                $this->error_msj = "No se ha podido hacer la consulta" . $consulta;
                return null;
            }
        }
    }

?>