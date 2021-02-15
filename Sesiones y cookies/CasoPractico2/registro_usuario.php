<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Completado</title>
</head>

<body>
    <?php
    require_once "lib/bbdd.php";
    require_once "lib/seguridad.php";

    // Creación del objeto de la base de datos para poder hacer la consulta
    $bbdd = new BBDD();
    $seguridad = new Seguridad();

    // Limpieza de seguridad para lo introducido en el formulario
    $email = $seguridad->sanearString($_POST['email']);
    $pass1 = $seguridad->sanearString($_POST['pass1']);
    $pass2 = $seguridad->sanearString($_POST['pass2']);
    $nombre = $seguridad->sanearString($_POST['nombre']);
    $apellidos = $seguridad->sanearString($_POST['apellidos']);

    // Comprobación de los datos insertados por el usuario
    if (
        isset($_POST['email']) && !is_null($_POST['email']) &&
        isset($_POST['pass1']) && !is_null($_POST['pass1']) &&
        isset($_POST['pass2']) && !is_null($_POST['pass2']) &&
        isset($_POST['nombre']) && !is_null($_POST['nombre']) &&
        isset($_POST['apellidos']) && !is_null($_POST['apellidos'])
    ) {

        // Comprobar que las dos contraseñas sean idénticas
        if ($_POST['pass1'] == $_POST['pass2']) {

            // Comprobar si existe el usuario, si da TRUE y lo encuentra, error
            if ($bbdd->buscarUsuario($email, NULL)) {
                echo "Error, ya existe el usuario";
                header("Location:registro.php");
            } else {
                // Codificamos la contraseña
                $pass1 = password_hash($pass1, PASSWORD_DEFAULT);

                // Se inserta un nuevo en la base de datos
                $newUser = $bbdd->insertarUsuario($email, $pass1, $nombre, $apellidos);

                // Mensaje de registro correcto
                if ($newUser != null) {
                    echo "<h4>Usuario Registrado.</h4>";
                    echo "<a href='index.php'>Pulsar para volver al LOGIN</a>";
                }
            }
        } else {
            echo "La contraseña no coincide";
            header('Location:registro.php');
        }
    }
    ?>
</body>

</html>