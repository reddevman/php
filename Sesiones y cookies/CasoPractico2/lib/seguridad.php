<?php

class Seguridad extends Connection
{

    function __construct()
    {
        session_start();
        if (isset($_SESSION['usuario'])) {
            $this->usuario = $_SESSION['usuario'];
        } else {
            $_SESSION['usuario'] = null;
        }
    }

    # FUNCIÓN PARA AÑADIR EL USUARIO A LA SESIÓN
    public function addUsuario($usuario){
        $_SESSION["usuario"]=$usuario;
        $this->usuario=$usuario;
    }

    # FUNCIÓN DE SEGURIDAD PARA SANEAR STRING DEL FORMULARIO
    function sanearString($string)
    {
        $string = stripslashes($string);
        $string = strip_tags($string);
        $string = htmlentities($string);
        return $string;
    }

    # FUNCIÓN DE SEGURIDAD PARA SANEAR SENTENCIA SQL
    function sanearMySQL($connection, $string)
    {
        $string = $this->getConexion()->real_escape_string($string);
        $string = $this->sanearString($string);
        return $string;
    }
}
