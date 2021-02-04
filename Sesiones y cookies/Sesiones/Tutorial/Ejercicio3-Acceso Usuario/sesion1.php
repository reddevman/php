<?php
$usuarioOK = 'alex';
$passOK = 'abcd';

if ($_POST['user'] === $usuarioOK && $_POST['pass'] === $passOK) {
    session_start();
    $_SESSION['verificado'] = 'sí';
    echo "Tienes acceso";
} else {
    header('Location:index.php?error=si');
}
