<?php

    class Connection {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "logincp2";

        private $conexion;

        # ERRORES
        private $error = false; private $error_msj = "";

        # CONEXIÓN A BASE DE DATOS
        function __construct()
        {
            $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

            if ($this->conexion->connect_errno) {
                $this->error =  true;
            }
        }

        function getConexion()
        {
            return $this->conexion;
        }

        # FUNCIÓN PARA SABER SI HAY ERROR EN LA CONEXIÓN
        function hayError()
        {
            return $this->error;
        }

        # FUNCIÓN QUE DEVUELVE UN MENSAJE DE ERROR
        function msjError()
        {
            return $this->error_msj;
        }

        # MÉTODO DE CONSULTA A LA BASE DE DATOS
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