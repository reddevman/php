<?php

class Seguridad
{
  private $usuario = null;

  function __construct()
  {
    session_start();
    if (isset($_SESSION["usuario"]["usuario"]))
      $this->usuario = $_SESSION["usuario"]["usuario"];
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function addUsuario($usuario, $pass)
  {
    $_SESSION["usuario"]["usuario"] = $usuario;
    $this->usuario = $usuario;
  }

  public function logOut()
  {
    //COMPLETAR ESTA FUNCIÓN
    $_SESSION["usuario"]["usuario"] =  null;
    $_SESSION = [];
    session_destroy();
  }
}
