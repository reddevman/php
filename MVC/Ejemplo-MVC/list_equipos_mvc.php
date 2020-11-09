<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de equipos</title>
  </head>
  <body>
    <?php
    include "nba_db.php";
    //Crear el objeto de conexion
    $nba=new nba_db();
    $resultado=$nba->devolverEquipos();
    if($resultado!=null){
        //Cuantas filas nos devuelve
        while($fila=$resultado->fetch_assoc()){
          echo "El equipo ".$fila['nombre']."<br>";
        }
    }
    ?>
  </body>
</html>
