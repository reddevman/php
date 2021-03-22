<?php
class db
{
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $db_name = "myapp";
  private $conexion;
  private $error = false;
  private $msj_error = "";

  function __construct()
  {
    $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
    if ($this->conexion->connect_errno) {
      $this->error = true;
      $this->msj_error = "No se puede establecer la conexión con la base de datos";
    }
  }

  function hayError()
  {
    return $this->error;
  }

  function msjError()
  {
    return $this->msj_error;
  }

  public function realizarConsulta($sql)
  {
    if (!$this->hayError()) {
      $resultado = $this->conexion->query($sql);
      return $resultado;
    } else {
      $this->msj_error = "Imposible realizar la consulta";
      return null;
    }
  }
}
