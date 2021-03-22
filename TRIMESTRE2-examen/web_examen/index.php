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
      <li><a href="registro.php">REGISTRO</a></li>
      <li><a href="">LOGIN</a></li>
    </ul>
    <div class="contenido">
      <?php
      $user=new Usuario();
      $seguridad=new Seguridad();
      $user->userLogin($user, $seguridad);
      if ($seguridad->getUsuario()!=null) {
        header('Location: compras.php');
      }else{?>
        <h1>Login</h1>
        <form class="" action="index.php" method="post">
          <label for="nombre">Nombre de usuario o email</label>
          <input class="llave" type="text" name="nombre" placeholder="Nombre de usuario" size="64" required>
          <label for="contraseña">Contraseña</label>
          <input class="llave" type="password" name="contraseña" placeholder="Contraseña" size="64" required>
          <input type="hidden" name="accion" value="login">
          <br><input type="submit" name="Acceder" value="Acceder">
        </form>
        <?php
      } ?>
    </div>
  </body>
</html>