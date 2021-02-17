<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Actualizar perfil</title>
</head>

<body>
    <?php
    require_once 'lib/bbdd.php';
    require_once 'lib/seguridad.php';

    // Saneamiento de las variables y creaciones de objetos necesarios
    $bbdd = new BBDD();
    $seguridad = new Seguridad();
    $email = $seguridad->sanearString($_POST['email']);
    $nombre = $seguridad->sanearString($_POST['nombre']);
    $apellidos = $seguridad->sanearString($_POST['apellidos']);

    if (
        isset($_POST['email']) && !is_null($_POST['email']) &&
        isset($_POST['nombre']) && !is_null($_POST['nombre']) &&
        isset($_POST['apellidos']) && !is_null($_POST['apellidos'])
    ) {

        // Nuevo objeto que devuelve la función de actualizar
        $updatedUser = $bbdd->actualizarUsuario($email, $nombre, $apellidos);

        // Si el contenido del objeto no es null, es decir que contiene datos...
        if ($updatedUser != null) {
            echo "Se han actualizado los datos del usuario " . $updatedUser->getUsuario() . " correctamente.";
            echo "Pulsa en <a href='index.php'>INICIO</a> para volver a la página principal de login.";
        } else {
            echo "Ha habido un error en la actualización " . $bbdd->getError();
            echo "Pulsar en el <a href='miperfil.php'>ENLACE</a> para volver a la página de Mi Perfil";
        }

        // Borra los datos de la sesión una vez ya se han usado y DESTRUYE la sesión
        $seguridad->borrarDatos();
    } else {
        header('Location:index.php');
    }
    ?>
</body>

</html>