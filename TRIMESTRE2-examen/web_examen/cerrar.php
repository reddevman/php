<?php
include "lib/Usuario.php";
include "lib/Seguridad.php";
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <ul>
      <li><b>MYAPP</b></li>
      <li><a href="">COMPRAS</a></li>
      <li><a href="">CERRAR SESIÓN</a></li>

    </ul>
    <div class="contenido">
      <?php
        $seguridad=new Seguridad();
        $seguridad->logOut();
        header('Location: index.php');
      ?>
    </div>
  </body>
</html>