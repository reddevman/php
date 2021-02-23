<?php
require_once "lib/connection.php";
require_once "lib/user.php";

class BBDD extends Connection
{

    # CONSTRUCTOR HEREDADO NECESARIO PARA LA CONEXIÓN A LA BBDD
    function __construct()
    {
        parent::__construct();
    }

    # FUNCIÓN INSERTAR
    function insertarUsuario($email, $pass, $nombre, $apellidos, $rol = "usuario")
    {

        // Creación del usuario como un nuevo objeto
        $newUser = new User();
        // Hash de contraseña (encriptar)
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

        // Las propiedades del objeto toman el valor de los parámetros
        // Serán los valores introducidos por el usuario en el formulario
        $newUser->setUsuario($email);
        $newUser->setEmail($email);
        $newUser->setPass($pass);
        $newUser->setNombre($nombre);
        $newUser->setApellidos($apellidos);
        $newUser->setRol($rol);


        // Consulta Sql de inserción
        $sql = "INSERT INTO usuarios (usuario, nombre, apellidos, email, rol, pass)
            VALUES ('" . $email . "', '" . $nombre . "', '" . $apellidos . "', '" . $email . "','" . $rol . "','" . $pass_hash . "')";

        // Capturar id de la consulta y añadirlo a la propiedad ID del usuario
        $resultado = $this->realizarConsulta($sql);
        if ($resultado) {
            $newUser->setId($this->getConexion()->insert_id);

            // Se devuelve el objeto
            return $newUser;
        } else {
            return null;
        }
    }

    # FUNCIÓN ACTUALIZAR
    public function actualizarUsuario($usuario, $nombre, $apellidos)
    {
        /* Se crea un nuevo objeto de usuario y se le establece como propiedades
        * lo introducido en los parámetros de la función.
        */
        $modUser = new User();
        $modUser->setUsuario($usuario);
        $modUser->setNombre($nombre);
        $modUser->setApellidos($apellidos);

        // Sentencia de actualización
        $sql = "UPDATE usuarios SET nombre = '" . $nombre . "',apellidos =
            '" . $apellidos . "' WHERE usuario = '" . $usuario . "'";

        // Se envía la consulta a la base de datos y se devuelve el objeto usuario creado
        $resultado = $this->realizarConsulta($sql);
        if ($resultado) {
            return $modUser;
        } else {
            return null;
        }
    }

    # FUNCIÓN BUSCAR USUARIO
    public function buscarUsuario($usuario)
    {
        // $pass_hash = sha1($pass);


        $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "'";


        // Construcción de la consulta a la variable resultado
        $resultado = $this->realizarConsulta($sql);
        if ($resultado->num_rows > 0) {
            // Se crea un objeto de usuario para poder rellenar los datos encontrados en la bbdd
            $usuarioDevuelto = new User();

            // Recorremos el resultado mientras haya datos y se asigna el valor encontrado al objeto
            for ($i = 0; $i < $resultado->num_rows; $i++) {
                if ($i == 0) {
                    // Se asigna a una variable el array asociativo de lo obtenido con fetch_assoc
                    $userData = $resultado->fetch_assoc();
                    $usuarioDevuelto->setId($userData['id']);
                    $usuarioDevuelto->setEmail($userData['email']);
                    $usuarioDevuelto->setNombre($userData['nombre']);
                    $usuarioDevuelto->setApellidos($userData['apellidos']);
                    $usuarioDevuelto->setUsuario($userData['usuario']);
                    $usuarioDevuelto->setPass($userData['pass']);
                }
            }
            // Devolución del objeto ya rellenado con los datos necesarios
            return $usuarioDevuelto;
        } else {
            return null;
        }
    }

    # FUNCIÓN BUSCAR ROLES
    public function recogerRoles()
    {
        $sql = "SELECT * FROM roles";
        $resultado = $this->realizarConsulta($sql);
        return $resultado;
    }
}
