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
    <li><a href="">REGISTRO</a></li>
    <li><a href="index.php">LOGIN</a></li>
  </ul>
  <div class="contenido">
    <?php
    $user = new Usuario();
    $seguridad = new Seguridad();
    $user->userRegistro($user, $seguridad);
    if ($seguridad->getUsuario() != null) {
      header('Location: index.php');
    } else { ?>
      <h1>Registro</h1>
      <form class="" action="registro.php" method="post">
        <label for="nombreUsuario">Nombre de usuario</label>
        <input type="text" name="nombreUsuario" placeholder="Nombre de usuario" size="64" required>
        <label for="nombreCompleto">Nombre Completo</label>
        <input type="text" name="nombreCompleto" placeholder="Nombre Completo" size="64" required>
        <label for="email">Correo Electronico</label>
        <input type="text" name="email" placeholder="Correo Electronico" size="64" required>
        <label for="contraseña">Contraseña</label>
        <input class="llave" type="password" name="contraseña" placeholder="Contraseña" size="64" required>
        <label for="confirmarContraseña">Confirmar Contraseña</label>
        <input type="password" name="confirmarContraseña" placeholder="Confirmar Contraseña" size="64" required>
        <input type="hidden" name="accion" value="registro">
        <br><input type="submit" name="Registrar" value="Registrar">
      </form>
    <?php }
    ?>
  </div>
</body>

</html>