<?php
/**
 * Permitir la conexion contra la base de datos
 */
class nba_db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="nba";
  private $pass="";
  private $db_name="nba";

  //Conector a la base de date_default_timezone_set
  private $mysqli;
  private $error=false;

  function __construct()
  {
      $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->mysqli->connect_errno) {
        $this->error=true;
      }
  }

  public function devolverEquipos(){
    if($this->error==false){
      $resultado = $this->mysqli->query("SELECT nombre FROM equipos");
      return $resultado;
    }else{
      return null;
    }
  }

  public function devolverEquiposConf(){
    if($this->error==false){
      $resultado = $this->mysqli->query("SELECT nombre,conferencia FROM equipos");
      return $resultado;
    }else{
      return null;
    }
  }
}


 ?>
