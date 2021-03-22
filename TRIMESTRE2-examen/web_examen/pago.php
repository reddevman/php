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
    <li><a href="compras.php">COMPRAS</a></li>
    <li><a href="proceso.php">CARRITO</a></li>
    <li><a href="cerrar.php">CERRAR SESIÓN</a></li>
  </ul>
  <div class="contenido">
    <?php
    $seguridad = new Seguridad();
    $user = $_SESSION["usuario"]["usuario"];
    echo '<h1>Pago</h1>';
    echo "<fieldset>";
    echo "<h2>Pago realizado por $user</h2>";
    echo "<table><th>Elemento</th><th>Cantidad</th>";
    foreach ($_SESSION["usuario"] as $key => $valor) {
      if ($key != 'usuario') {
        echo "<tr><td>" . $key . "</td><td>" . $valor . "</td></tr>";
      }
    }
    echo "</table>";
    $arrayCarro = array();
    $arrayCarro["usuario"] = $user;
    $_SESSION["usuario"] = $arrayCarro;

    /*******************************************************************
        //AQUÍ FALTA "QUITAR" LA COOKIE carro 
     *******************************************************************/
    setcookie('carro', time()-60);
    ?>
    <br>
    </fieldset>
  </div>
</body>

</html>