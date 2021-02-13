<?php
    require_once "lib/connection.php";
    require_once "lib/user.php";

    class Bbdd extends Connection {
    

        # CONSTRUCTOR HEREDADO NECESARIO PARA LA CONEXIÓN A LA BBDD
        function __construct()
        {
            parent::__construct();
        }

        # FUNCIÓN INSERTAR
        function insertarUsuario ($email, $pass, $nombre, $apellidos, $rol = "usuario") {

            # Creación del usuario como un nuevo objeto
            $newUser = new User();

            # Las propiedades del objeto toman el valor de los parámetros
            # Serán los valores introducidos por el usuario en el formulario
            $newUser->setUsuario($email);
            $newUser->setEmail($email);
            $newUser->setPass($pass);
            $newUser->setNombre($nombre);
            $newUser->setApellido($apellidos);
            $newUser->setRol($rol);

            # Hash de contraseña (encriptar)
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

            # Consulta Sql de inserción
            $sql = "INSERT INTO usuarios (usuario, nombre, apellidos, email, rol, pass)
            VALUES ('".$email."', '".$nombre."', '".$apellidos."', '".$email."','".$rol."','".$pass_hash."')";
            
            # Capturar id de la consulta y añadirlo a la propiedad ID del usuario
            if ($this->conexion->query($sql)) {
                $newUser->setId($this->conexion->insert_id);
                return $newUser;
              }
              else {
                return null;
              }
        }

        # FUNCIÓN ACTUALIZAR
        public function actualizarUsuario ($usuario, $email, $nombre, $apellidos) {
            
            $sql = "UPDATE usuarios SET nombre = '".$nombre."',apellidos =
            '".$apellidos."',email = '".$email."' WHERE usuario = '".$usuario."'";
            $this->conexion->query($sql);
        }

        # FUNCIÓN RECOGER ÚLTIMO USUARIO MODIFICADO O INSERTADO
        public function mostrarUsuario() {
            $sql = "SELECT * from usuario ORDER BY DESC";
            $resultado = $this->realizarConsulta($sql);
            $arrayUsuario = [];
    
            if ($resultado != null) {
                while ($fila = $resultado->fetch_assoc()) {
                    $arrayUsuario[] = $fila;
                }
                return $arrayUsuario;
            } else {
                return null;
            }
        }
    }
