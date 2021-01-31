<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cookies</title>
</head>

<body>
  <?php

  // Contador de visitas
  if (!isset($_COOKIE['numVisitas'])) {
    setcookie('numVisitas', 0);
    echo "Cookie generada";
  } else {
    $valor = $_COOKIE['numVisitas'] + 1;
    setcookie('numVisitas', $valor);
  }
  if (isset($_COOKIE['numVisitas'])) {
    echo "Número de visitas = " . $_COOKIE['numVisitas'];
  }
  ?>
</body>

</html>