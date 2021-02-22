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
    public function setUsuario($usuario)
    {
        $_SESSION['usuario'] = $usuario;
        $this->usuario = $usuario;
    }

    # FUNCIÓN DE CIERRE DE SESIÓN
    public function logOut()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: login.php');
    }
}
