<?php
require_once 'lib/Seguridad.php';
$seguridad = new Seguridad();
if ($seguridad->getUsuario() == null) {
    header('Location: login.php');
    exit;
} // Si no, pasará al HTML y se podrá tener acceso a la página
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <h2>Estoy dentro</h2>
        <p>Tu usuario es <?= $seguridad->getUsuario() ?></p>
        
        <!-- Formulario para botón de cerrar sesión -->
        <form action="seguridad.php" method="post">
            <input type="hidden" name="accion" value="destroy">
            <input type="submit" name="close_session" value="Cerrar Sesión">
        </form>
    </div>
</body>

</html>