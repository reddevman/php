<?php

    // Array conteniendo datos de una persona
    $persona = array('Pepe', 'Pérez', '38', 'Málaga', 'contraseña');

    // Crear una cookie por cada elemento/posición del array que nos interese
    setcookie('miCookie[nombre]', $persona[0], time()+3600);
    setcookie('miCookie[apellido]', $persona[1], time()+3600);
    setcookie('miCookie[edad]', $persona[2], time()+3600);
    setcookie('miCookie[localidad]', $persona[3], time()+3600);
    setcookie('miCookie[password]', $persona[4], time()+3600);

    // Atención a los dos corchetes para la llamada a la cookie
    echo "El nombre es: " . $_COOKIE['miCookie']['nombre'];
?>