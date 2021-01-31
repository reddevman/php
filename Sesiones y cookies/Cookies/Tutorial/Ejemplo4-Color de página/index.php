<?php

// Comprobación de si se ha enviado ya el color mediante el select
if (isset($_POST['color'])) {
    // Almacenar en una variable para manejar mejor
    $color = $_POST['color'];
    // Se crea la cookie con el valor del color elegido en el formulario
    setcookie('color', $color, time() + 80000);
    
} else {
    // Si el usuario entra a la web directamente sin pasar por el formulario
    // el color va a ser el que ya haya sido almacenador en la cookie con anterioridad
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
        // Si no se ha elegido antes un color, se va a indicar como COLOR POR DEFECTO el blanco
    } else {
        $color = 'white';
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php
        // Uso de la variable color en el estilo del fondo
        echo "body {background-color:" . $color . "}";
        ?>
    </style>
    <title>Color página</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="color">Escoge un color</label>
        <select name="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
            <option value="gray">Gris</option>
        </select>
        <input type="submit" value="Cambiar color">
    </form>
</body>

</html>