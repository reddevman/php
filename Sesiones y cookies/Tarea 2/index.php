<?php
session_start();
$miArray = [];
$_SESSION['listaNombres'] = $miArray;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres SESIONES PHP</title>
</head>

<body>
    <form action="mostrar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Inserta el nombre">
        <button type="submit">ENVIAR</button>
    </form>
    <div class="resultados">
        <?php

        if (isset($_SESSION['listaNombres']) && !empty($_SESSION['listaNombres'])) {

            for ($i=0; $i < count($_SESSION['listaNombres']); $i++) { 
                for ($j=0; $j < count($_SESSION['listaNombres'][$i]); $j++) { 
                    echo $_SESSION['listaNombres'][$i];
                }
            }
        } else {
            echo "Introduce un nombre para iniciar sesión :)";
        }
        ?>
    </div>
</body>

</html>