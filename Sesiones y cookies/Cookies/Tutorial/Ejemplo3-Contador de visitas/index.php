<?php

// Si la cookie existe le suma 1 visita a su valor
// Si no existe la crea y le da el valor de 1
if (isset($_COOKIE['contador'])) {
    $valor = $_COOKIE['contador'] + 1;
    setcookie('contador', $valor, time()+365*24*60*60);
    echo "Bienvenido/a de vuelta.<br>";
    echo "Número de visitas: " . $_COOKIE['contador'];
} else {
                            // 365 dias * 24 horas * 60 min * 60 segundos
    setcookie('contador', 1, time()+365*24*60*60);
    echo "Bienvenido por primera vez :)";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Contador Visitas</title>
</head>

<body>

</body>

</html>