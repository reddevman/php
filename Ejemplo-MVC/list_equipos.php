<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de equipos</title>
  </head>
  <body>
    <?php
    //Crear el objeto de conexion
    $mysqli = new mysqli("localhost", "root", "", "nba");
    if ($mysqli->connect_errno) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
      //No ha habido error
      echo "Conexion realizada<br>";
      //Hacemos una consulta
      $resultado = $mysqli->query("SELECT nombre FROM equipos");
      //Cuantas filas nos devuelve
      while($fila=$resultado->fetch_assoc()){
        echo "El equipo ".$fila['nombre']."<br>";
      }
    }
    ?>
  </body>
</html>
