<?php
require_once 'lib/seguridad.php';
$seguridad = new Seguridad();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
</head>

<body>
    <div>
        <h3>REGISTRO</h3>
        <?php
        if ($_SESSION["tipo_error"] != null) {
            echo "<h4 class=\"error\">Error: " . $_SESSION["tipo_error"] . "</h4>";
        }
        ?>
        <form action="registro_usuario.php" method="post">
            <label for="email">E-mail</label>

            <?php
            // Comprobación en caso de que ya haya una información de sesión previa en el navegador
            if ($_SESSION['usuario'] != null) {
                echo "<input type='text' id='email' name='email' value='" . $_SESSION['usuario'] . "' required></br>";
            } else {
                echo "<input type=\"text\" id=\"email\" name=\"email\" required></br>";
            }
            ?>

            <label for="pass1">Contraseña</label>
            <input type="password" name="pass1" required>
            <label for="pass2">Repetir contraseña</label>
            <input type="password" name="pass2" required>

            <label for="nombre">Nombre</label>
            <?php
            if ($_SESSION['nombre'] != null) {
                echo "<input type='text' id='nombre' name='nommbre' value='" . $_SESSION['nombre'] . "' required></br>";
            } else {
                echo "<input type=\"text\" id=\"nombre\" name=\"nombre\" required></br>";
            }
            ?>

            <label for="apellidos">Apellidos</label>
            <?php
            if ($_SESSION['apellidos'] != null) {
                echo "<input type='text' id='apellidos' name='apellidos' value='" . $_SESSION['apellidos'] . "' required></br>";
            } else {
                echo "<input type=\"text\" id=\"apellidos\" name=\"apellidos\" required></br>";
            }
            ?>

            <input type="hidden" name="accion" value="registro">
            <input type="submit" value="REGISTRARSE">
        </form>
    </div>
    <footer>&copy; ALEJANDRO MÁRQUEZ ARAGONÉS</footer>
</body>

</html>