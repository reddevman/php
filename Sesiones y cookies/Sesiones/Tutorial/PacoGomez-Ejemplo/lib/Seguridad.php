<?php
class Seguridad
{
    private $usuario = null;

    function __construct()
    {
        session_start();
        if (isset($_SESSION['usuario'])) {
            $this->usuario = $_SESSION['usuario'];
        }
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     */
    public function setUsuario($usuario,$remember=false)
    {
        // Se genera la variable de sesión
        $_SESSION['usuario'] = $usuario;
        $this->usuario = $usuario;

        // Se almacena el usuario en cookies
        if($remember) {
            setcookie('usuario_login', $usuario, time()+60*60);
        }
    }

    # FUNCIÓN DE CIERRE DE SESIÓN
    public function logOut()
    {
        $_SESSION = [];
        setcookie('usuario_login', time()-60*60);
        session_destroy();
        header('Location: login.php');
    }
}
