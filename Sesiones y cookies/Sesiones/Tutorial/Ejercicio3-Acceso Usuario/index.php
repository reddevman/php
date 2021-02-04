<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Formulario</title>
</head>

<body>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'si') {
            echo "Tu usuario y contraseña no son correctos";
        }
    }
    ?>

    <form action="sesion1.php" method="post">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="user" placeholder="Introduce tu nick">
        <label for="pass">Tu contraseña:</label>
        <input type="password" name="pass" placeholder="Contraseña">
        <br>
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>