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
    <li><a href="proceso.php">CARRITO</a></li>
    <li><a href="cerrar.php">CERRAR SESIÓN</a></li>
  </ul>
  <div class="contenido">
    <?php
    $seguridad = new Seguridad();
    $user = $_SESSION["usuario"]["usuario"];
    echo '<h1>Compras</h1>';
    echo "<fieldset>";
    echo "<h2>Elementos disponibles - Usuario: $user</h2>";
    ?>
    <form action="proceso.php" method="post">
      <table>
        <tr>
          <th>Elemento</th>
          <th>Cantidad</th>
        </tr>
        <tr>
          <td>Peras</td>
          <td><input type="text" name="peras" size="2"></td>
        </tr>
        <tr>
          <td>Plátanos</td>
          <td><input type="text" name="platanos" size="2"></td>
        </tr>
      </table>
      <br>
      <input type="submit" value="Añadir a carrito">
    </form>
    <br>
    </fieldset>
  </div>
</body>

</html>