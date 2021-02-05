<?php

/*
    Página intermedia para cargar la cookie correctamente.
    En PHP hay un retardo en la actualización de la cookie.
    Por eso es necesario una página intermedia para que se cree la cookie y entonces se autodirecciona al carrito.
*/

// - Comprobación de que el valor recibidio del input es correcto y no está vacío
if (isset($_POST['lapices']) && !empty($_POST['lapices'])) {
    // - Variable del input para acortar su llamada
    $lapices = $_POST['lapices'];

    // Comprobar si la cookie no está creada, se crea y si ya existe se le suma el nuevo valor introducido a lo que ya había
    if (!isset($_COOKIE['lapiz'])) {
        setcookie('lapiz', $lapices, time() + 3600);

    } else {
        $valor = $_COOKIE['lapiz'] + $lapices;
        setcookie('lapiz', $valor, time() + 3600);
    }
}
if (isset($_POST['papeles']) && !empty($_POST['papeles'])) {
    $papeles = $_POST['papeles'];

    if (!isset($_COOKIE['papel'])) {
        setcookie('papel', $papeles, time() + 3600);
    } else {
        $valor = $_COOKIE['papel'] + $papeles;
        setcookie('papel', $valor, time() + 3600);
    }
}
if (isset($_POST['gomas']) && !empty($_POST['gomas'])) {
    $gomas = $_POST['gomas'];

    if (!isset($_COOKIE['goma'])) {
        setcookie('goma', $gomas, time() + 3600);
    } else {
        $valor = $_COOKIE['goma'] + $gomas;
        setcookie('goma', $valor, time() + 3600);
    }
}
if (isset($_POST['boligrafos']) && !empty($_POST['boligrafos'])) {
    $boligrafos = $_POST['boligrafos'];

    if (!isset($_COOKIE['boligrafo'])) {
        setcookie('boligrafo', $boligrafos, time() + 3600);
    } else {
        $valor = $_COOKIE['boligrafo'] + $boligrafos;
        setcookie('boligrafo', $valor, time() + 3600);
    }
}
// Redireccionamiento que se hará en cualquier caso, haya cantidad del producto o no
header('Location: ./carrito.php');
?>