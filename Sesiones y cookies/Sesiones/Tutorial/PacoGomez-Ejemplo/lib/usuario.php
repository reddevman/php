<?php
require_once "lib/db.php";

class Usuario extends db
{

    function __construct()
    {
        // Conecta con la base de datos al heredar de db
        parent::__construct();
    }

    # FUNCIÓN DE INSERTAR UN USUARIO
    // Al ir al final edad y rol y con valores por defecto cuando se llama a la función no hace falta darles valor
    function insertarUsuario($usuario, $nombre, $apellidos, $pass, $edad = 18, $rol = "usuario")
    {
        // Construcción de la consulta, no es imprescindible declararlo antes
        $sql = "INSERT INTO usuario (id, usuario, nombre, apellidos, edad, rol, pass)
            VALUES (NULL, '". $usuario ."', '". $nombre ."', '". $apellidos ."', '". $edad ."','". $rol ."','". sha1($pass) ."')";

        // Realizar consulta
        $resultado = $this->realizarConsulta($sql);
        if ($resultado) {
            // Consulta de último usuario insertado
            $sql = "SELECT * FROM usuario ORDER BY id DESC";

            // Realizar consulta
            $resultado = $this->realizarConsulta($sql);

            // Devolver el array asociativo de la consulta en un array
            if ($resultado) {
                $arrayConsulta = [];
                while ($fila = $resultado->fetch_assoc()) {
                    $arrayConsulta = $fila;
                }
                return $arrayConsulta;
            } else {
                return null;
            }
        }
    }

    # FUNCIÓN BUSCAR UN USUARIO
    function buscarUsuario($usuario) {

        $sql = "SELECT * FROM usuario WHERE usuario ='".$usuario."'";

        $resultado = $this->realizarConsulta($sql);
        if ($resultado) {
            
            // Devuelve la fila que se obtiene de la consulta
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    }
}
