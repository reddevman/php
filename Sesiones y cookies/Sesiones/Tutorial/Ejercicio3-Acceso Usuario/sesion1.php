<?php
$usuarioOK = 'alex';
$passOK = 'abcd';

if ($_POST['user'] === $usuarioOK && $_POST['pass'] === $passOK) {
    session_start();
    $_SESSION['verificado'] = 'sí';
    echo "Tienes acceso";
    echo "<a href='sesion2.php'>Ver el contenido privado</a>";
} else {
    header('Location:index.php?error=si');
}
