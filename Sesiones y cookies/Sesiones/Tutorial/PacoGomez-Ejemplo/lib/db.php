<?php

class db
{

    // Propiedades
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "usuarios";

    // Conexión
    private $conexion;

    // Propiedades para errores
    private $error = false;
    private $error_msj = "";

    function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if ($this->conexion->connect_errno) {
            $this->error = true;
            $this->error_msj = "No se ha podido realizar la conexión";
        }
    }

    // Función que devuelve un booleano para saber si hay error
    function hayError()
    {
        return $this->error;
    }

    // Function que devuelve el mensaje de error
    function msjError()
    {
        return $this->error_msj;
    }

    // Método que realiza la consulta la base de datos
    public function realizarConsulta($consulta) {
        if (!$this->error) {
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        } else {
            $this->error_msj = "No se puede realizar la consulta";
            return null;
        }
    }
}
