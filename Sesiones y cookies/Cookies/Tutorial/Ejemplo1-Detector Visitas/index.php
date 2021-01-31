<?php
    // Comprobaremos la existencia de una cookie para ver si el usuario ha vuelto
    // a la página o es un usuario nuevo y no tiene la cookie en su ordenador

    if(isset($_COOKIE['visita'])) {
        echo "¡Bienvenido/a de nuevo! :)";
    } else {

        // Si no hay cookie creada, se creará una nueva
        // El valor no es importante, sino la existencia de la cookie
        setcookie('visita','ok', time()+31536000);
        echo "¡Bienvenido/a!";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Visitas</title>
</head>
<body>
    
</body>
</html>